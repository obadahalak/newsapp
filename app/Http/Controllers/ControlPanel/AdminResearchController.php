<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ResearchRequest;

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
        if ($status == '1')
            return redirect()->back()->with('success', 'تم قبول البحث');
        elseif ($status == '0')
            return redirect()->back()->with('success', 'تم الغاء تفعيل البحث');
        else
            return redirect()->back()->with('success', 'تم قبول البحث');
    }

    public function deleteResearch($id)
    {
        $Research = Research::find($id);
        $listImages = $Research->images;
        foreach ($listImages as $images) {
            if (File::exists('public/storage/'.'storage' . $images->src)) {

                unlink('storage' . $images->src);
            }
        }
        $Research->images()->delete();
        $Research->delete();
        return to_route('Researches', 'ar')->with('success', ' تم حذف البحث بنجاح');
    }

    public function researchCreate(ResearchRequest $request)
    {
        $research = Research::create($request->validated() + ['status' => 2, 'category_id' => 11]);

        foreach ($request->images as $imageList) {
            $research->images()->create([
                'src' => '/' . $imageList->store('research', 'public'),
                'type' => 'image',
            ]);
        }
        return redirect()->back()->with('success', 'تم انشاء البحث');
    }
}
