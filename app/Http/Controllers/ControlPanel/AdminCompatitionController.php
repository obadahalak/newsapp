<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Models\PostCompatition;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ComptionRequest;
use App\Http\Resources\CompetitionByIdResourse;

class AdminCompatitionController extends Controller
{
    public function getCompatiton()
    {
        $compatiton = Competition::with(['prize_files', 'members'])->get();

        return view('Competitions', compact('compatiton'));
    }
    public function getPostCompetitions($id)
    {
        return new CompetitionByIdResourse(Competition::select('id', 'name_ar', 'details_ar', 'prize_ar')->with('postCompatition')->find($id));
    }
    public function createCompatition(ComptionRequest  $request)
    { 
            
        $create = Competition::create($request->validated());
        $create->prize_files()->create([
            'src' =>$request->image->store('CompetitionFiles','public'),
            'type' => 'image',
        ]);
        toastr()->success('تم الأضافة بنجاح');
        return redirect()->back();
    }

}
