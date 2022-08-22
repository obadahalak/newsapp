<?php

namespace App\Http\Controllers\Api\sections;

use App\Models\Category;
use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserchSectionController extends Controller
{



    //Create Reseach
    public function CreateReseachSection(Category $category_id, Request $request)
    {

        $data = Research::create([
            'category_id' => $category_id,
            'title' => $request->title,
            'body' => $request->body,
            'status' => False,
            'user_id'=>auth()->user()->id,
        ]);

        if ($request->image->count() > 0) {
            foreach ($request->image as $photo) {
                $data->images->insert([
                    'src' => $photo,
                ]);
            }
        }
        return redirect()->back();
    }


}
