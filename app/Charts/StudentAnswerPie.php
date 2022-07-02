<?php

declare(strict_types=1);

namespace App\Charts;

use App\Http\Controllers\StudentController;
use App\Models\Answers;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentAnswerPie extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $getStudentIdThroughUrlParams = Session::get('studentSession');
        $getstudentyeses = Answers::where('answ_id', '2')->where('student_id', $getStudentIdThroughUrlParams)->count();
        $getstudentno = Answers::where('answ_id', '3')->where('student_id', $getStudentIdThroughUrlParams)->count();
        $getstudentmaybes = Answers::where('answ_id', '4')->where('student_id', $getStudentIdThroughUrlParams)->count();
        $getstudentdont = Answers::where('answ_id', '5')->where('student_id', $getStudentIdThroughUrlParams)->count();

        $perceYes = $getstudentyeses * 100 / 10;
        $percNo = $getstudentno * 100 / 10;
        $percMaybe = $getstudentmaybes * 100 / 10;
        $percdont = $getstudentdont * 100 / 10;
        return Chartisan::build()
            ->labels(['YES', 'NO', 'MAYBE', "DON'T"])
            ->dataset('radius', [$perceYes, $percNo, $percMaybe, $percdont]);
    }
}
