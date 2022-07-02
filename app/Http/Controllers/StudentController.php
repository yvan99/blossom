<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Councelor;
use App\Models\Questions;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function GenerateUsername(){
        $generateCode = 'STUDENT' . (rand(000000, 999999));
        return view('signup',['code'=>$generateCode]);
    }
    public function CreateStudent(Request $request){
        $rules = [
            'fullname' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'province' => 'required',
            'district'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->only('fullname','gender','password','provinces','districts'))->withErrors($validator);
        } else {

            $studentData = $request->input();

            try {
                if ($studentData['gender']=='male') {
                    return redirect()->back()->with('status', "Sorry ,you cannot participate in this survey");
                }
                $student = new Student();
                $student-> student_username = $studentData['fullname'];
                $student->gender = $studentData['gender'];
                $student->password = bcrypt($studentData['password']);
                $student->student_province = $studentData['province'];
                $student->student_district  = $studentData['district'];
                $student->save();
                return redirect('/signin')->with('status', "Account created successfully");
            } catch (Exception $e) {
                return redirect()->back()->with('status', "operation failed");
            }
    }
}

public function populateData(){
    $getStudents = Student::all();
    $getCouncelors= Councelor::all();
    $getQuestions = Questions::all();

    $getStudentstotal = Student::all()->count();
    $getCouncelortotals= Councelor::all()->count();
    $getQuestionstotal = Questions::all()->count();
    $getAnswers=Answers::all()->count();
    
    

    return [

        'questions'=>$getQuestions,
        'counselorse'=>$getCouncelors,
        'students'=>$getStudents,
        'totalstudents'=>$getStudentstotal,
        'totalcounsel'=>$getCouncelortotals,
        'totalquestion'=>$getQuestionstotal,
        'totalquizes'=>$getAnswers,
        
    ];
}

public function chartDatas(Request $request){
    $getStudentIdThroughUrlParams = $request->segment(3);
    return $getStudentIdThroughUrlParams;

}

public function xxx(){

}

public function getStudentQuiz($id){
$getStudentAnswers = DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id AND students.student_id='$id' ORDER BY student_answers.st_ans_id ASC ");
foreach ($getStudentAnswers as $key ) {
$getStudent = $key->student_username;
$getStudentId = $key->student_id;
}
Session::put('studentSession', $getStudentId);
return view('admin.studquizes',['questions'=>$getStudentAnswers,'student'=>$getStudent]);
}
}
