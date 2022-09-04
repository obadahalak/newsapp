<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RoomsRequest;


class AdminRoomController extends Controller
{
    public function getRoomsView(){
      $rooms=Room::latest()->get();
        return view('Chat', compact('rooms'));
    }
    public function editRoom( RoomsRequest $request){
        $room=Room::find($request->id);
        $inputs=$request->validated();
        $inputs['image']=$request->image->store('rooms','public');
        $room->update($inputs);
        toastr()->success('تم التعديل');
        return redirect()->back();
        
    }
}
