<?php

namespace App\Http\services;

use Illuminate\Support\Str;



trait SearchService
{

    public function listOfSearchServices()
    {
        return array('COURSE', 'NEWS','BUSINESSES','COMPETITIONS');
    }
    public function validateSearch($modelName): bool
    {
        $arrayOfSearchServiceAvailable = $this->listOfSearchServices();
        if (in_array($modelName, $arrayOfSearchServiceAvailable)) {
            return true;
        }else{

            return false;

        }
    }
    public function searchObject($lan,$modelName, $textSearch)
    {
        if ($this->validateSearch($modelName)) {

            $className = 'App\Http\services\Search\Search' . Str::upper($modelName) . 'Service';
            return     (new $className)->search($lan,$textSearch);
        }

            return  response()->json('SerachService  ' . $modelName . '  isnotavailable');

    }


    public function getModel($model)
    {

        try {
            $getClass = $model::getPath();
        } catch (\Error $th) {
            return   $th->getMessage();
        }
        $objectModel = (new $getClass());
        return $this->searchService($objectModel, 'T', 'title');
    }


    public function searchService($model, $textSearch, $coulm)
    {
        try {

            $data = $model::where($coulm, 'like', '%' . $textSearch . '%')->get();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return response()->json([
            'data' => $data,
        ]);
    }
}
