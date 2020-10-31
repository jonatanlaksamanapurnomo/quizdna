<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Attempt;

class AnswerEditorController extends Controller
{
    public function insertAnswer(Request $request){
        $examId = $request->examId;
        $userId = $request->userId;
        $questionId = $request->questionId;
        $answerByStudent = $request->answer;

        $answer = Answer::where([
            ['question_id', $questionId],
            ['student_id', $userId]
        ])->first();

        if($answer === null){
            $answer = new Answer;
            $answer->exam_id = $examId;
            $answer->student_id = $userId;
            $answer->question_id = $questionId;
            $answer->answer = $answerByStudent;
            $answer->save();
            return response()->json("success");
        }

        $answer->answer = $answerByStudent;
        $answer->save();

        return response()->json("success");
    }

    public function editAnswer(Request $request, $id)
    {
        $givenScore = $request->input("score");
        $answer = Answer::find($id);
        $answer->score = $givenScore;
        $answer->save();

        $attempt = Attempt::where('exam_id', $answer->exam_id)->where('student_id',1)->first();
        // dd($attempt->id);
        $attempt->total_score = $attempt->total_score + $givenScore;
        $attempt->save();
        return redirect()->back();
    }
}
