<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request){
        $name = $request->image->getClientOriginalName();
        //$imageName = Str::random(32).".".$request->image->getClientOriginalExtension();
        //$imageName =$name.".".$request->image->getClientOriginalExtension();
        $request->image->move('imageProducts/', $name);
       // Storage::disk('imageProducts')->put($name,file_get_contents($request->image));

        return $name;

     
    }

    
}
