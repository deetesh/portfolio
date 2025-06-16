<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController
{
    public function index(){
        return view('blog.index'); 
    }

    public function create(){
        return view('blog.create'); 
    }

    public function save(){

        $aBlog = request()->validate([
            'page_title' => 'required',
            'content' => 'required' // myeditorinstance
        ]);
        $oBlog = Blog::create($aBlog);

        return redirect('/'); 
    }
    public function edit(){
        return view('blog.edit'); 
    }
    public function show(){
        dd('back'); 
        return view('blog.edit'); 
    }
}
