<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Download;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('home', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function berita(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('berita', compact('posts'));
    }
    // public function download(){
    //     try{
    //         return Storage::disk('local')->download('storage/berkas/December2020/5VgnHwqhTV2QVFN13KR5.docx');
    //     } catch (\Exception $e){
    //         return $e->getMessage();
    //     }
    // }
    
}
