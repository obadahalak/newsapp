<?php

namespace App\Http\services\Search;


use App\Models\Product;

class SearchPRODUCTService {

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Product::where('title_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Product::where('title', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
