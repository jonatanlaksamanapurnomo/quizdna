<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerEditorController extends Controller
{

    public function editAnswer(Request $request, $id)
    {
        $givenScore = $request->input("score");
        $answer = Answer::find($id);
        $answer->score = $givenScore;
        $answer->save();
        return redirect()->back();


    }
}
