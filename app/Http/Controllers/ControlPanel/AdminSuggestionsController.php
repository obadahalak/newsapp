<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class AdminSuggestionsController extends Controller
{
    public  function getSuggestions(){
        $data=Suggestion::latest()->get();
        return view('Suggestions',compact('data'));
    }
}
