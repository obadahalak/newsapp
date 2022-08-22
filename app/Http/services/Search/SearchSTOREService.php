<?php

namespace App\Http\services\Search;

use App\Models\Store;


class SearchSTOREService {

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Store::where('name_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Store::where('name', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
