<?php

namespace App\Http\services\Search;

use App\Models\Business;
use App\Models\Course;

class SearchBUSINESSESService
{

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Business::where('name_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Business::where('name', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
