<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller
{
    public function getRandomQuestions(){
        $getRandom = DB::select("SELECT * FROM questions ORDER BY rand() LIMIT 10");
        $getQuestions= DB::select("SELECT * FROM answers");
        return view('quiz',['randomize'=>$getRandom,'answers'=>$getQuestions]);
    }
    public function CreateQuestion(Request $request){
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
                $question-> quest_question = $questionData['question'];
                $question->save();
                return redirect()->back()->with('status', "Question created successfully");
            } catch (Exception $e) {
                return redirect()->back()->with('status', "operation failed");
            }
    }
    }}
