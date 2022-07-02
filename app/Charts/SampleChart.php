<?php

declare(strict_types=1);

namespace App\Charts;

use App\Models\Answers;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $getQuizesAttempts = (Answers::all()->count());

        # KIGALI CITY
        $getKigaliNot = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id <> 2 and students.student_province='Kigali'"));
        $getKigaliYes = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id = '2' and students.student_province='Kigali'"));

        $totalKigaliYes = $getKigaliYes * 100 / $getQuizesAttempts;
        $totalKigaliNo  = $getKigaliNot * 100 / $getQuizesAttempts;

        # EAST
        $getEastNot = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id <> 2 and students.student_province='East'"));
        $getEastYes = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id = '2' and students.student_province='East'"));

        $totalEastYes = $getEastYes * 100 / $getQuizesAttempts;
        $totalEastNo  = $getEastNot * 100 / $getQuizesAttempts;

        # WEST
        $getWestNot = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id <> 2 and students.student_province='West'"));
        $getWestYes = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id = '2' and students.student_province='West'"));

        $totalWestYes = $getWestYes * 100 / $getQuizesAttempts;
        $totalWestNo  = $getWestNot * 100 / $getQuizesAttempts;

        # NORTH
        $getNorthNot = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id <> 2 and students.student_province='North'"));
        $getNorthYes = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id = '2' and students.student_province='North'"));

        $totalNorthYes = $getNorthYes * 100 / $getQuizesAttempts;
        $totalNorthNo  = $getNorthNot * 100 / $getQuizesAttempts;

        # SOUTH
        $getSouthNot = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id <> 2 and students.student_province='South'"));
        $getSouthYes = count(DB::select("SELECT * FROM students,questions,answers,student_answers WHERE students.student_id=student_answers.student_id and student_answers.answ_id=answers.answ_id and student_answers.quest_id=questions.quest_id and student_answers.answ_id = '2' and students.student_province='South'"));

        $totalSouthYes = $getSouthYes * 100 / $getQuizesAttempts;
        $totalSouthNo  = $getSouthNot * 100 / $getQuizesAttempts;

        return Chartisan::build()
            ->labels(['Eastern', 'Western', 'Kigali', 'Southern', 'Northern'])
            ->dataset('Sample', [$totalEastYes, $totalWestYes, $totalKigaliYes, $totalSouthYes, $totalNorthYes])
            ->dataset('Sample 2', [$totalEastNo, $totalWestNo, $totalKigaliNo, $totalSouthNo, $totalNorthNo]);
    }
}
