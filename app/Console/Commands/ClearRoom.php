<?php

namespace App\Console\Commands;

use App\Models\Room;
use App\Models\MessageRoom;
use Illuminate\Console\Command;

class ClearRoom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:clearRoom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all Messages if Room is empty';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $EmptyRooms=Room::whereDoesntHave('join_User')->pluck('id');
        MessageRoom::whereIn('room_id',$EmptyRooms)->delete();
    }
}
