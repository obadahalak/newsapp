<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SiginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
        public function uploadImage($imageName, $UserImage)
        {

                if (File::exists('public/storage/'. $UserImage) && $UserImage!=='profileImage/defaultImage.png') {

                    unlink('public/storage/' . $UserImage);
                    $path = $imageName->store('profileImage', 'public');
                    return $path;
                } else {
                    $path = $imageName->store('profileImage', 'public');
                    return $path;
                }

        }

    public function AuthLogin(LoginRequest $request)
    {


        if (Auth::attempt($request->validated())) {

            return Auth::user()->createToken($request->email)->plainTextToken;
        }
        return response()->json('Error', Response::HTTP_UNAUTHORIZED);
    }

    public function AuthSigin(SiginRequest $request)
    {


        $user = User::create(
            $request->validated() +
                [
                    'user_name' => $request->fname . '_' . $request->lname,
                ]

        );

        return  $user->createToken($request->email)->plainTextToken;
    }



    public function AuthProfile(Request $request)
    {


        $validated = $request->validate([
            'email' => 'email|unique:users,email,' . auth('sanctum')->user()->id,
            'user_name' => '',
            'bio' => '',
            'country' => '',
            'fname' => '',
            'lname' => '',
            'phone' => '',
        ]);

        $UserImage = auth('sanctum')->user()->image;
         $request->user()->update(
            $validated +
                [
                    'image' => $request->image ?  $this->uploadImage($request->image, $UserImage)->dd() : $UserImage,
                ]

        );
        return response()->json(['message' => 'Successfully uploaded']);
    }

    public function getProfile()
    {
        $user = auth('sanctum')->user();
        return new ProfileResource($user);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }

    public function getProfileFromId($id){

    return new ProfileResource(User::findOrFail($id));
    }
}
