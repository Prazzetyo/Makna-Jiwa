<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $answerScore = array_slice($request->all(), 2);
        $totalScore = 0;
        foreach ($answerScore as $score) {
            $totalScore += $score;
        }
        $totalScore /= count($answerScore);
        $totalScore *= 20;

        $body = DB::table('solusi')->where('id_kategori', $request->id_kategori)->get();
        $solusi = DB::table('solusii')->where('id_kategori', $request->id_kategori)->get();
        
        return view('result', compact('totalScore', 'body', 'solusi'));
    }
}
