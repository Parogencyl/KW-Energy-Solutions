<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function delete(Request $request){
        
        $fileName = $request->input('file');
        
        if(File::delete(public_path('grafika/realizacje/'.$fileName))){
            return back()->with('success', 'Zdjęcie zostało usunięte.');
        } else {
            return back()->with('error', 'Nie udało się usunąć zdjęcia.');
        }
        
    }
    
    public function add(Request $request){
        
        $fileName = $request->file('image');

        if($fileName){

        $images = File::allFiles(public_path('grafika/realizacje'));
        $number = count($images)+1;

        $name = "image".$number.".jpg";

        if(Storage::disk('public_uploads_realizacje')->putFileAs('', $fileName, $name)){
            return back()->with('success', 'Udało się dodać nowe zdjęcie.');
        } else {
            return back()->with('error', 'Nie udało się dodać nowego zdjęcia');
        }
    } else {
        return back()->with('error', 'Należy wybrać plik przed dodaniem');
    }
        
    }

}
