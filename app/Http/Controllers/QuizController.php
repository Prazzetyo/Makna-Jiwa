<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __invoke($id, $nama)
    {
        $body = DB::table('soal')->where('id_kategori', $id)->get();        
        return view('quiz', compact('body'), ['nama_kategori' => $nama]);
    }
}
