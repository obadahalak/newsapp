<?php

namespace App\Http\Controllers;

use App\Models\ReportUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportUserController extends Controller
{
    public function reportUser(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ])->validate();


            ReportUser::create([
                'user_id' =>$request->user_id,
            ]);
            return response()->json(['Message' => 'Reportd User'], 201);
        }

}
