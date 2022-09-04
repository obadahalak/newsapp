<?php

namespace App\Http\Controllers\Api\Sections;

use Faker\Factory;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Http\Traits\Translate;
use App\Models\CompetitionUser;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompetitionResourse;
use App\Http\Resources\CompetitionByIdResourse;

class CompetitionController extends Controller
{
    public function getListCompetition($lan)
    {
        if ($lan == 'ar')
            return   CompetitionResourse::collection(Competition::select('id', 'name_ar', 'details_ar', 'prize_ar')->get());
        else

            return   CompetitionResourse::collection(Competition::select('id', 'name', 'details', 'prize')->get());
    }
    public function getCompetitonById($lan ,  $id)
    {
        if($lan=='ar'){

        return new CompetitionByIdResourse(Competition::select('id', 'name_ar', 'details_ar', 'prize_ar')->with('postCompatition')->find($id));
        }
        else{
            return new CompetitionByIdResourse(Competition::select('id', 'name', 'details', 'prize')->with('postCompatition')->find($id));

        }
    }
    public function JoinCompition(Request $request)
    {
        $request->validate([
            'competition_id' => 'required|exists:competitions,id',
        ]);
        $createCompatition = auth('sanctum')->user()->compatitionUser()->syncWithoutDetaching($request->competition_id);

        if (!empty($createCompatition['attached'])) {
            return response()->json('craeted');
        } else {
            return response()->json('exssits',422);
        }
    }
    public function isJoinUserToCompetiton($competition_id)
    {
        $Competition = Competition::find($competition_id);

        return $Competition->isJoind(auth('sanctum')->user());
    }
    public function createPostCompetition(Request $request)
    {

        $request->validate([
            'competition_id' => 'required|exists:competitions,id',
            'body' => 'required',
            'video' => 'required',
        ]);

      //  if ($this->isJoinUserToCompetiton($request->competition_id)) {

            $join=  auth('sanctum')->user()->postCompetition()->create([

                'competition_id' => $request->competition_id,
                'body' => $request->body,
                'video' => $request->video,

            ]);
            if($join){
                return response()->json(['Message' => true]);

            }
       // }
            // else{
            //     return response()->json('User Not Joined',422);
            // }
        }
    }
