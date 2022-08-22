<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Room;
use App\Models\JoinRoom;
use App\Models\MessageRoom;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Http\Resources\RoomsResource;
use function PHPUnit\Framework\isJson;
use function PHPUnit\Framework\isNull;
use App\Http\Resources\MessagesResource;
use App\Models\User;

class RoomController extends Controller
{

    public function getRooms($lan)
    {
        if ($lan == 'ar')
            return RoomsResource::collection(Room::select('id', 'name_ar', 'image')->get());
        else
            return RoomsResource::collection(Room::select('id', 'name', 'image')->get());
    }
    public function getRoomMessages($roomId)
    {
        return MessagesResource::collection(MessageRoom::where('room_id', $roomId)->get());
    }

    public function createMessage($roomId, Request $request)
    {

        $room = Room::findOrFail($roomId);

        $room->messages()->create([
            'user_id' => auth('sanctum')->id(),
            'message' => $request->message,
        ]);

        return response()->json('send Message success');
    }

    public function cheackIfJoindUser($roomId)
    {

        $room = Room::findOrFail($roomId);

        $isJoin = $room->joindBy(auth('sanctum')->user());
        if (!$isJoin)
            return true;
        else
            return false;
    }

    public function roomIsAbailable($roomId)
    {

        $maxNumber = Room::find($roomId)->maxNumberOfMembers;

        $getCountOfMembers = JoinRoom::where('room_id', $roomId)->count();

        if ($getCountOfMembers < $maxNumber)

            return true;
        else
            return false;
    }
    public function joinRoom($roomId)
    {

        if ($this->cheackIfJoindUser($roomId) && $this->roomIsAbailable($roomId)) {

            auth()->user()->join_Room()->create([
                'room_id' => $roomId,
            ]);

            return response()->json('JoinRoom true');
        }
        return response()->json('The Room Is Full Or You Already joined');
    }

    public function leaveRoom(Room $roomId)
    {
        if (!$this->cheackIfJoindUser($roomId)) {
            auth('sanctum')->user()->leaveRoom($roomId)->delete();
        }
    }

    public function ClearRoomChat($roomId){
       // $EmptyRooms=Room::whereDoesntHave('join_User')->pluck('id');
        //MessageRoom::whereIn('room_id',$EmptyRooms)->delete();


    }




}
