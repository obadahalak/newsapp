<?php

namespace App\Http\Traits\admin;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

trait profileAdmin
{

    public function uploadImage($image, $adminImage)
    {
        if ($image) {
            if(File::exists('public/storage/'.'public/storage/'.$adminImage)){

                unlink('public/storage/' . $adminImage);
            }
            $nameImage = $image->store('adminImage', 'public');
            return $nameImage;
        } else
            return auth('admin')->user()->image;
    }
    public function updatePassword($password, $newPassowrd)
    {
        if (isset($newPassowrd) && Hash::check($newPassowrd, $password))

            return  Hash::make($newPassowrd);
        else
            return auth('admin')->user()->password;
    }
}
