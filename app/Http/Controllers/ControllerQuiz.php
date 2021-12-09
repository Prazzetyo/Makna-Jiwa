<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerQuiz extends Controller
{
    public function __invoke($id)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->get('localhost/apimaknajiwa/api/soal',[
            'id_kategori'=>$id,
        ]);
        
        $body = $response->body();
        $body = json_decode($body);
        return view('quiz', compact('body'));
    }
}
