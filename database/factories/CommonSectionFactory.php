<?php

namespace Database\Factories;

use App\Http\Traits\Translate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommonSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $translateGoogle=new Translate();
        $name_ar=$translateGoogle->translate(fake()->name);
        $details_ar=$translateGoogle->translate(fake()->realText(80));
        $type=random_int(1,5);
        return [
            'name'=>fake()->name,
            'name_ar'=>$name_ar,
            'details'=>fake()->realText(80),
            'details_ar'=>$details_ar,
            'type'=>$type,
            'type_ar'=>$type,
            'link'=>'https://google.com',
        ];
    }
}
