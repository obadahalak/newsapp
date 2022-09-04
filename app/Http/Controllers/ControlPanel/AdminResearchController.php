<?php
namespace App\Http\Controllers\ControlPanel;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class AdminResearchController extends Controller
{
    public function researchView($lan)
    {
        $Researchs = Research::with(['images', 'auther'])->latest()->paginate(5);

        return view('Researches.Researches', compact('Researchs', 'lan'));
    }
    public function ResearchDetails($lan, $id)
    {
        $getResearch = Research::find($id);
        return view('Researches.ResearchDetails', compact('getResearch', 'lan'));
    }

    public function toggleResearch($id, $status)
    {

        Research::find($id)->update([
            'status' => $status,
        ]);
        return redirect()->back();
    }

    public function deleteResearch($id){
        $Research = Research::find($id);
        $listImages = $Research->images;
        foreach ($listImages as $images) {
            if(File::exists('storage'.$images->src)){

                unlink('storage'.$images->src);
            }
        }
        $Research->images()->delete();
        $Research->delete();
        return to_route('Researches','ar');
    }
}

