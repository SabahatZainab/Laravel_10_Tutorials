<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        // $breeds = Http::get('https://dog.ceo/api/breeds/list/random/5')['message'];
        $breeds = Http::get('https://www.omdbapi.com/')['message'];
        dd($breeds);
        return view('welcome',compact('breeds'));

    }
}
