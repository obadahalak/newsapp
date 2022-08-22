<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'store_id'=>random_int(1,4),
            'link'=>'https://ifmis-2030.shop/',
            'image'=>'/ProductImages/p2.png',
        ];
    }
}
