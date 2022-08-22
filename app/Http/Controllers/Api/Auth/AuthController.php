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
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

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
                    'user_name' => $request->fname . '_' . $request->lname
                ]

        );

        return  $user->createToken($request->email)->plainTextToken;
    }


    public function AuthProfile(Request $request)
    {


        $validated = $request->validate([
            'email' => 'email|unique:users,email,' . $request->id,
            'user_name' => 'min:4',
            'bio' => '',
            'country' => '',
            'fname' => '',
            'lname' => '',
            'phone' => '',
            'image' => 'image',
        ]);
        if (request('image')) {
            if (auth('sanctum')->user()->image) {

                unlink('storage/' . auth('sanctum')->user()->image);

                auth('sanctum')->user()->update([
                    'image' => null
                ]);
            }

            $imageName = 'profileImage/' . $request['image']->hashName();
            $path = $request->image->store('/profileImage', 'public');
            $imaegArray = ['image' => $imageName];
        }
        $request->user()->update(array_merge(
            $validated,
            $imaegArray ?? []
        ));
        return 'updated data';
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
}
