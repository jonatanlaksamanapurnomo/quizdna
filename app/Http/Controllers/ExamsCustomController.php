<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Attempt;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Question;

class ExamsCustomController extends Controller
{
    //
    public function join(Request $request)
    {
        $roomCode = $request->input('code');
        $examId = Exam::where("exam_code", $roomCode)->firstOrFail()->id;
        $kambing = new Attempt();
        $kambing->exam_id = $examId;
//        hard coded
        $kambing->student_id = 1;
        $kambing->save();
        return redirect()->back();

    }

    public function getDashboard(Request $request)
    {
        $onGoing = DB::table('attempts')->join('exams', 'exam_id', '=', 'exams.id')->where('exams.exam_start', '>=', Carbon::now())->get();
        $done = DB::table('attempts')->join('exams', 'exam_id', '=', 'exams.id')->where('exams.exam_start', '<', Carbon::now())->get();

        return view("dashboard", [
            "onGoing" => $onGoing,
            "done" => $done
        ]);
    }

    public function getExamRoom(Request $request, $examCode)
    {

        $exam = Exam::where("exam_code", $examCode)->first();
//        questions
        $question = $exam->questions;


        return view("exam", [
            "examName" => $exam->exam_name,
            "questions" => $question
        ]);
    }
}
