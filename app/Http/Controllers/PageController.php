<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showMeme($choice)
    {
        return view('example', ['choice' => $choice]);
    }
}
