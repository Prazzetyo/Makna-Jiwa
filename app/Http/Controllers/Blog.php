<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Blog extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->get('localhost/apimaknajiwa/api/article');
        
        $body = $response->body();
        $body = json_decode($body);

        return view('blog', compact('body'));
    }
}
