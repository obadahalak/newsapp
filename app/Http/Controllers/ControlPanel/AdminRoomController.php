<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RoomsRequest;
use Illuminate\Support\Facades\File;

class AdminRoomController extends Controller
{
    public function getRoomsView(){
      $rooms=Room::latest()->get();
        return view('Chat', compact('rooms'));
    }
    public function editRoom( Request $request){


        $room=Room::find($request->id);
        $roomImage=$room->image;
        $room->update([
        'name'=>$request->name ?? $room->name,
        'name_ar'=>$request->name_ar ?? $room->name_ar,
        'color'=>$request->color ?? $room->color,
        'maxNumberOfMembers'=>$request->maxNumberOfMembers ?? $room->maxNumberOfMembers,
       'image' => $request->image ?  $this->uploadImage($request->image, $roomImage) : $roomImage,
        ]);

        toastr()->success('تم التعديل');

        return redirect()->back();

    }

     public function uploadImage($imageName, $UserImage)
    {
        if ($UserImage) {
            if (File::exists('public/storage/'.'public/storage/' . $UserImage)) {

                unlink('public/storage/' . $UserImage);
                $nameImage = $imageName->store('rooms', 'public');
                return $nameImage;
            } else {
                $nameImage = $imageName->store('rooms', 'public');
                return $nameImage;
            }
        }

    }
}
