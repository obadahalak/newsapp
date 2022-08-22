<?php

namespace App\Http\Controllers\ControlPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashBoardController extends Controller
{
    public function DasahBoardView(){
        return view('Dashboard');
    }
}
