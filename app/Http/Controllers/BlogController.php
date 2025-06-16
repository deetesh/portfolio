<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController
{
    public function index(){
        return view('blog.index'); 
    }

    public function create(){
        $aBlog = DB::table('blogs')->simplePaginate(10);
        return view('blog.create', [
             'blogs' => $aBlog
        ]); 
    }

    public function save(){
        $aBlog = request()->validate([
            'page_title' => 'required',
            'content' => 'required' // myeditorinstance
        ]);
        $oBlog = Blog::create($aBlog);

        return redirect()->to('/create'); 
    }

    public function preview(){
        dd('back'); 
        return view('blog.edit'); 
    }

    public function edit($id){
        $aBlog = DB::table('blogs')->find($id);
        return view('blog.edit', [ 'aBlog' => $aBlog ]); 
    }

    public function editBlog( $id ) {
         $aBlog = request()->validate([
            'page_title' => 'required',
            'content' => 'required' // myeditorinstance
        ]);

         DB::table('blogs')->where('id', $id)
            ->update($aBlog);

            return redirect('/create'); 
    }

    public function delete($id) {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect()->to('/create'); 
    }

}
