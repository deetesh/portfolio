<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController
{
    public function index(){
        return view('blog.index'); 
    }
    public function create(){
        return view('blog.create'); 
    }
    public function edit(){
        return view('blog.edit'); 
    }
}
