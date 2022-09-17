<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request){

        $imageName = Str::random(32).".".$request->image->getClientOriginalExtension();
        Storage::disk('imageProducts')->put($imageName,file_get_contents($request->image));

        return $imageName;

     
    }

    
}
