<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailBlog extends Controller
{
    public function __invoke($id)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ])->get('localhost/apimaknajiwa/api/article',[
            'id_artikel'=>$id,
        ]);
        
        $body = $response->body();
        $body = json_decode($body);
        return view('detail-blog', compact('body'));
    }
}
