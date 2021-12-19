<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __invoke($id)
    {
        $body = DB::table('soal')->where('id_kategori', $id)->get();
        // $nama = $body[0]->nama;

        // return view('quiz', compact('body'), ['nama' => $nama]);
        return view('quiz', [
            'body' => $body,
            'category_id' => $id,
        ]);
    }
}
