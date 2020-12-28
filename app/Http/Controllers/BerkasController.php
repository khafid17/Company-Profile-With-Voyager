<?php

namespace App\Http\Controllers;
use App\Berkas;
use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public function index(){
        $berkas = berkas::orderBy('created_at', 'desc')->paginate(5);
        return view('dokumen', compact('berkas'));
        
    }
    public function data($download){
        $berkas = berkas::where('dokumen', '=', $download)->firstOrFail();

        // $berkas = berkas::where('id', '=', $dokumen)->firstOrFail();
        return view('data', compact('berkas'));
    }
    public function show(){
        // $path = Storage::url('kvXGzkm8HN8qbAOWJ9gu.png');
        // return '<img src="'.$path.'" alt="">';
    }
    public function view(){
        return view('dokumen.preview');
    }
    // public function download(){
    //     try{
    //         return Storage::disk('local')->download('public/berkas/Review.pdf');
    //     } catch (\Exception $e){
    //         return $e->getMassage();
    //     }
    // }
}
 