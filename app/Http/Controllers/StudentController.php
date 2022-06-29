<?php

namespace App\Http\Controllers;

use App\Models\Councelor;
use App\Models\Questions;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                $student->password = bcrypt('password');
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

    return [

        'questions'=>$getQuestions,
        'counselorse'=>$getCouncelors,
        'students'=>$getStudents,
        'totalstudents'=>$getStudentstotal,
        'totalcounsel'=>$getCouncelortotals,
        'totalquestion'=>$getQuestionstotal
    ];
}
}
