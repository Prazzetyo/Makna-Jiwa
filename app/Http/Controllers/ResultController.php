<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $answerScore = array_slice($request->all(), 1);
        $totalScore = 0;
        foreach ($answerScore as $score) {
            $totalScore += $score;
        }
        $totalScore /= count($answerScore);
        $totalScore *= 20;
        return view('result', compact('totalScore'));
    }

    public function show($result)
    {
        return view('result');
    }
}
