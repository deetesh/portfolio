<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class BlogController
{
    public function index(){
        $aBlog = DB::table('blogs')->simplePaginate(10);
        return view('blog.index', [
             'blogs' => $aBlog
        ]); 
    }

    public function create(){
        if ( Auth::guest() ) { 
            return redirect('/login');
        }
        $aBlog = DB::table('blogs')->simplePaginate(10);
        return view('blog.create', [
             'blogs' => $aBlog
        ]); 
    }

    public function save(){
        $aBlog = request()->validate([
            'page_title' => 'required',
            'summary' => 'required', 
            'content' => 'required' // myeditorinstance
        ]);
        $oBlog = Blog::create($aBlog);

        return redirect()->to('/create'); 
    }

    public function preview($id){
        // retreive content from database by id
        $sContent = DB::table('blogs')->find($id)->content;
        // render string into html code
        $html = Blade::render($sContent);
        // push in blade to display
        return view('blog.preview', [ 'html' =>  $html]); 
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
