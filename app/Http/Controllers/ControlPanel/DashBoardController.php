<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Room;
use App\Models\User;
use App\Models\Course;
use App\Models\Research;
use App\Models\Competition;
use App\Models\UserCountry;
use Illuminate\Http\Request;
use App\Models\CountOfVisits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use App\Http\Resources\UserCountryResourcce;
use App\Models\GlobalVisits;

class DashBoardController extends Controller
{



    public function DasahBoardView(Request $request)
    {
        $visitsCountry = CountOfVisits::all();
        $usersCount = User::count();
        $courseCount = Course::count();
        $competitionsCount = Competition::count();
        $reSearchCount = Research::count();
        $Rooms = Room::count();
        $globalVisis=GlobalVisits::count();
        $researchPainding=Research::where('status',0)->with(['images', 'auther'])->latest()->paginate(7);
        return view(
            'Dashboard',
            compact(
                'visitsCountry',
                'usersCount',
                'courseCount',
                'competitionsCount',
                'reSearchCount',
                'Rooms',
                'researchPainding',
                'globalVisis'
            )
        );
    }

    public  function usersApp(){
        $users=User::with('userCountry')->latest()->paginate(10);

        return view('Users',compact('users'));
    }
}
