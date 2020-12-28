<?php

namespace App\Http\Controllers;

use App\Berkas;
use App\Download;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    // public function show($id){
    //     $berkas = Berkas::Find($id);
    //     return Storage::download($berkas->name, $berkas->id);
    // }
    // public function index(){
    //     $berkas = Berkas::all();
    //     return view('dokumen.view', compact('berkas'));
    // }
    // public function show($id){
    //     $berkas = Berkas::find($id);
    //     return view('dokumen.details', compact('berkas'));
    // }
    // public function download($dokumen){
    //     return response()->download('storage/berkas/December2020/'.$dokumen);
    // }
    public function upload(Request $request){
        
        // Berkas::create($data);
        try{
            // $path = $request->file('image')->store('public/storage/berkas/December2020');
        // dd($path);
        // $path = Storage::putFile('public', $request->file('image'));
        // $path = $request->file('image')->storeAs('public', 'gambar');
        $file = $request->file('image');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $newName = $name . '.' . $extension;
        // $path = $request->file('image')->storeAs('public', $newName);
        $size = $file->getClientSize();
        $path = Storage::putFile('public', $request->file('image', $newName));
        // dd($path);
        $data =[
            'path' => $path,
            'size' => $size
        ];
        } catch (\Exception $e){
            return $e->getMessage();        
    }
}

    public function list(){
        // $files = Storage::allFiles('public');
        // $directories = Storage::allDirectories('');
        // $directory = Storage::makeDirectory('image/gif');
        $directory = Storage::deleteDirectory('image/gif');
        dd($directory);
    }
    public function show(){
        $path = Storage::url('as.jpg.jpg');
        return '<img src="' .asset('/storage/as.jpg.jpg'). '" alt="">';
    }
    public function copy(){
        try{
            Storage::copy('public/as.jpg.jpg', 'copy-image.jpg');
            return 'success';
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
    public function move(){
        try{
            Storage::move('image/copy-image.jpg', 'public/move-image.jpg');
            return 'success';
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    public function download(){
        try{
          return Storage::disk('local')->download('public/as.jpg.jpg');
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    public function delete(){
        try{
            Storage::disk('local')->delete('public/as.jpg.jpg');
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
