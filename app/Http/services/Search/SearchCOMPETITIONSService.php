<?php

namespace App\Http\services\Search;

use App\Models\Blog;
use App\Models\Competition;

class SearchCOMPETITIONSService {

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Competition::where('name_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Competition::where('name', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
