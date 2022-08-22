<?php

namespace App\Http\Controllers\Api\sections;

use Error;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\services\LikeService;
use App\Http\Controllers\Controller;
use App\Http\Resources\StoreResourse;
use App\Http\Resources\ProductResourse;

class StoresController extends Controller
{


    public function getStores($lan ,$catId)
    {
        if ($lan == 'ar')
            return StoreResourse::collection(Store::where('category_id',$catId)->select('id','category_id', 'name_ar', 'lang', 'lat')->get());
        else

            return StoreResourse::collection(Store::where('category_id',$catId)->select('id','category_id', 'name', 'lang', 'lat')->get());
    }
    public function getProduct($lan, $id)
    {
        if ($lan == 'ar') {
            return ProductResourse::collection(Product::where('store_id', $id)->select('id', 'store_id', 'link')->get());
        } else {
            return ProductResourse::collection(Product::where('store_id', $id)->select('id', 'store_id','link')->get());
        }
    }
}
