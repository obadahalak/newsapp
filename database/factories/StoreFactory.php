<?php

namespace Database\Factories;

use App\Http\Traits\Translate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $translate = new Translate();
        $name = $this->faker->name();
        $name_ar = $translate->translate($name);


        return [
            'category_id' => random_int(12, 14),
            'name' => $name,
            'name_ar' => $name_ar,
            'link'=>'https://ifmis-2030.shop/',
            'lang' => '12312',
            'lat' => '12312'
        ];
    }
}
