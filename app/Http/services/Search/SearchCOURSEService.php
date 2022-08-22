<?php

namespace App\Http\services\Search;

use App\Models\Course;

class SearchCOURSEService
{

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Course::where('name_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Course::where('name', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
