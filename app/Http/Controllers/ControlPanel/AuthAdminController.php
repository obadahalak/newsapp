<?php

namespace App\Http\Controllers\ControlPanel;

use Illuminate\Http\Request;
use App\Http\Traits\admin\profileAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginAdminRequest;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\admin\ProfileAdminRequest;

class AuthAdminController extends Controller
{
    use profileAdmin;
    public function loginAdmin()
    {
        return view('auth.login');
    }

    public function loginFailed()
    {
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
            'password' => [trans('auth.password')]
        ]);
    }
    public function AuthAdmin(LoginAdminRequest $request)
    {
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return to_route('DashBoard');
        }
        return $this->loginFailed();
    }

    public function editProfile(ProfileAdminRequest $request)
    {

        $AdminPassword = auth('admin')->user()->password;
        $adminImage = auth('admin')->user()->image;

                auth('admin')->user()->update([
                    'image' => $this->uploadImage($request->upload, $adminImage),
                    'password' =>  $this->updatePassword($AdminPassword,$request->newPassword)
                ]);

                toastr()->success('تم تعديل البيانات ');
                return redirect()->back();

        }


    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return to_route('Login');
    }
}
