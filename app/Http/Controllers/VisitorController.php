<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function  counterIncrement($ResaerchId)
    {
        $getVisitor = Visitor::where('research_id', $ResaerchId)->firstOr(function () use ($ResaerchId) {
            Visitor::create([
                'research_id' => $ResaerchId,
                'counter' => 1,
            ]);
        });

        if($getVisitor){

            $getVisitor->update([

                'counter' => $getVisitor->getCounter(),

            ]);
        }



    }
}
