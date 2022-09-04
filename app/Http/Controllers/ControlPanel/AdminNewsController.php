<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\News;
use App\Models\Category;
use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ResearchRequest;
use Illuminate\Support\Facades\File;

class AdminNewsController extends Controller
{

    public function newsView($lan)
    {

            $News = News::with('images')->latest()->paginate(5);

            return view('News.News', compact('News','lan'));
    }

    public function CreateNews(NewsRequest $request)
    {

        $News = News::create($request->validated() + [
            'category_id' => 3
        ]);

        foreach ($request->image as $images) {
            $News->images()->create([
                'src' => '/' . $images->store('NewsImages', 'public'),
                'type' => 'image',
            ]);
        }
        return redirect()->back();
    }

    public function ActiveResearch(Research $research_id, Request $request)
    {
        $Research = Research::findOrfail($research_id);
        $Research->update([
            'status' => $request->status
        ]);
    }
    public function deleteNews($lan, $newsId)
    {
        // return $newsId;
        $NewRecord = News::find($newsId);
        $listImages = $NewRecord->images;
        foreach ($listImages as $images) {
            if(File::exists('storage'.$images->src)){

                unlink('storage'.$images->src);
            }
        }
        $NewRecord->images()->delete();
        $NewRecord->delete();
        return redirect()->back();
    }
}
