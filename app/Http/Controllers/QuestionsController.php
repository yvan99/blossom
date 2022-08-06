<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller
{
    public function getRandomQuestions()
    {
        $getRandom = DB::select("SELECT * FROM questions ORDER BY rand() LIMIT 10");
        $getQuestions = DB::select("SELECT * FROM answers");
        return view('student.quiz', ['randomize' => $getRandom, 'answers' => $getQuestions]);
    }
    public function CreateQuestion(Request $request)
    {
        $rules = [
            'question' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->only('question'))->withErrors($validator);
        } else {

            $questionData = $request->input();

            try {
                $question = new Questions();
                $question->quest_question = $questionData['question'];
                $question->save();
                return redirect()->back()->with('status', "Question created successfully");
            } catch (Exception $e) {
                return redirect()->back()->with('status', "operation failed");
            }
        }
    }
    public function getEditedQuestion($id)
    {
        $getQuestion = Questions::where('quest_id', $id)->first();
        return view('admin.questionedit', ['question' => $getQuestion]);
    }
    public function UpdateQuestion(Request $request)
    {
        $question = $request->get('question');
        $questId = $request->get('id');
        $updateQuestion = DB::update("UPDATE questions SET quest_question='$question' WHERE quest_id='$questId'");
        if ($updateQuestion) {
            return redirect('/question')->with('status', 'Question Updated Successfully');
        }
    }
    // public function EditQuestion(Request $request,$question)
    // {
    //     $findQuestion = Questions::find($question);
    //     $findQuestion->quest_question=$request->get('');

    //     $questions = DB::select("select * from questions where quest_id = ?',[$item]");
    //     return view('questionedit',['questions'=>$item]);

    // }

    public function attemptQuiz(Request $request)
    {
        $loggedInStudent = Auth::user()->student_id;
        if ($loggedInStudent) {
            $verifyAttempt = DB::select("SELECT * FROM student_answers WHERE student_id='$loggedInStudent'");
            if ($verifyAttempt) {
                return redirect()->back()->with('status', "You have already attempted a quiz");
            } else {
                $inputArray = $request->input();

                foreach ($inputArray as $array_key => $items) {
                    $answer = new Answers();
                    $answer->answ_id = $items;
                    $answer->quest_id = $array_key;
                    $answer->student_id = $loggedInStudent;
                    $answer->st_ans_status = 1;
                    $answer->st_ans_date = date('Y-m-d H:i:s');
                    $answer->save();
                }

                // AFTER INSERTING VALUES , GET RID OF THE TOKEN BASED ROWS
                DB::delete("DELETE FROM student_answers WHERE quest_id IN('_token')");
                return redirect()->route('successsurvey');
            }
        }
    }
}
