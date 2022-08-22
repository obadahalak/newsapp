<?php

namespace App\Http\services;

use App\Http\Traits\Translate;
use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Eloquent\Model;


trait CategoryService
{
    //Create Category for Every  Model
    public function CreateCatgoryModel($model)
    {
        $trans = new Translate();
        $Faker = Factory::create();
        $name = $Faker->realText(20);
        $name_ar = $trans->translate($name);

        try {
            $getModel = $model::getPath();
        } catch (\Error $er) {
            return $er->getMessage();
        }

        $createCat = Category::create([
            'model' => $getModel,
            'name' => $name,
            'name_ar' => $name_ar,
            'image' => '/categoryImages/p1.png',
        ]);
        if ($createCat) {
            return true;
        }
        return false;
    }

    public function getCategories($model, $lan)
    {
        try {
            $getModel = $model::getPath();
        } catch (\Error $er) {
            return $er;
        }
        if ($lan == 'ar') {

            return Category::select('id','name_ar', 'image')->where('model', $getModel)->get();
        }
        return  Category::select('id','name', 'image')->where('model', $getModel)->get();
    }
}
