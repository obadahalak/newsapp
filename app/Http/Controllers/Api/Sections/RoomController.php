<?php

namespace App\Http\Controllers\Api\Sections;

use App\Models\Room;
use App\Models\User;
use App\Models\JoinRoom;
use App\Models\MessageRoom;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\JoinUsersList;
use App\Http\Resources\RoomsResource;
use function PHPUnit\Framework\isJson;
use function PHPUnit\Framework\isNull;
use App\Http\Resources\MessagesResource;

class RoomController extends Controller
{

    public function getRooms($lan)
    {
        if ($lan == 'ar')
            return RoomsResource::collection(Room::select('id', 'name_ar', 'image','color')->get());
        else
            return RoomsResource::collection(Room::select('id', 'name', 'image','color')->get());
    }
    public function dateOfJoin($roomId)
    {
        return auth('sanctum')->user()->dateOfJoinRoom($roomId);
    }
    public function getRoomMessages($roomId)
    {
        // return MessageRoom::where('room_id', $roomId)->where('created_at', '>=', $this->dateOfJoin($roomId))->with('join_User')->get();
        return MessagesResource::collection(MessageRoom::where('room_id', $roomId)->where('created_at', '>=', $this->dateOfJoin($roomId))->get());
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

        $room = Room::find($roomId);
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

        if (!$this->cheackIfJoindUser($roomId)) {
            return  ;
        }
        if (!$this->roomIsAbailable($roomId)) {
            return response()->json('The Room Is Full Or You Already joined');
         }
        else {
        auth()->user()->join_Room()->create([
            'room_id' => $roomId,
        ]);

        return response()->json('JoinRoom true');
    }
    }

    public function leaveRoom($roomId)
    {

        if (!$this->cheackIfJoindUser($roomId)) {

            auth('sanctum')->user()->leaveRoom($roomId)->delete();
            return response()->json(['message' => 'Leave room is Successfully']);
        }
    }

    public function getUsersJoinedRoom($roomId) {

  return  JoinUsersList::collection(JoinRoom::where('room_id',$roomId)->get());

    }
    public function ClearRoomChat($roomId)
    {
        // $EmptyRooms=Room::whereDoesntHave('join_User')->pluck('id');
        //MessageRoom::whereIn('room_id',$EmptyRooms)->delete();


    }
}
