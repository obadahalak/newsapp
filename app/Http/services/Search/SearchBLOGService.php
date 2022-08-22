<?php

namespace App\Http\services\Search;

use App\Models\Blog;

class SearchBLOGService {

    public function search($lan, $TextSearch)
    {
        if ($lan == 'ar') {

            return    Blog::where('title_ar', 'LIKE', '%' . $TextSearch . '%')->get();
        } else {
            return    Blog::where('title', 'LIKE', '%' . $TextSearch . '%')->get();
        }
    }
}
