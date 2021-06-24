<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;


class postcontroller extends Controller
{
    

    public function index()
    {
        return view('home');
    }
}
