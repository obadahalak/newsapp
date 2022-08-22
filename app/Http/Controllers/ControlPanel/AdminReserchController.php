<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Category;
use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminReserchController extends Controller
{
    public function CreateResearch(Category $category_id, Request $request)
    {


            $data = Research::create([
                'category_id' => $category_id,
                'title' => $request->title,
                'body' => $request->body,
                'status' => True,
            ]);


        if ($request->file('image')->count() > 0) {
            foreach ($request->image as $photo) {
                $data->images->insert([
                    'src' => $photo,
                ]);
            }
        }
    }

    public function ActiveResearch(Research $research_id, Request $request)
    {
        $Research = Research::findOrfail($research_id);
        $Research->update([
            'status' => $request->status
        ]);
    }
}
