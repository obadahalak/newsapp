<?php

namespace App\Http\Controllers\Adminn;

use DB;
use Illuminate\Http\Request;
use App\Models\ProjectStatus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Attempting;

class StatusProjectController extends Controller
{

    public function login()
    {
        return view('adminn');
    }
    public function superAdmin()
    {
        $p=ProjectStatus::first();
      return view('statusProject',compact('p'));
    }
    public function changeStatus(Request $request){
       $p=ProjectStatus::first();
       $p->update([
        'status'=>$request->status,
       ]);
       return redirect()->back();
    }
    public function AuthSAdmin(Request $request)
    {
        if (Auth::guard('superAdmin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return to_route('superAdmin');
        } else {
            return redirect()->back();
        }
    }
}
