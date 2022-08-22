<?php

namespace App\Http\services\Search;


use App\Models\News;

class SearchNEWSService {

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    News::where('title_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    News::where('title', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
