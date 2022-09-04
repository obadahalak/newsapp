<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Baner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class BannerController extends Controller
{

    public function ListImage(){
        $images=Baner::select('image')->get();
        return response()->json($images);
    }
    // public function  uploadImage(Request $req){
    //     $rule=[
    //         'image'=>'image',
    //     ];
    //     $validated=Validator::make(['image',$req->img],$rule);
    //     if($validated->fails()) {
    //     return 'asd';
    //     }
    //     else{
    //         dd($req->image);
    //         $image=$req->image->hashName();



    //          Baner::create([
    //             'image'=>$image,
    //         ]);
    //         $req->image->store('dddd','public');
    //     }

    // }
}
