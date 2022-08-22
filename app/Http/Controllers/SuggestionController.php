<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SuggestionRequest;
use App\Models\Suggestion;

class SuggestionController extends Controller
{
    public function createSuggestion(SuggestionRequest $request){

       $suggestion= Suggestion::create($request->validated());
       if($suggestion->wasRecentlyCreated==true)

           $request['file']->store('suggestionFile','public');

        else

            return response()->json('SuggestionError',422);

    }
}
