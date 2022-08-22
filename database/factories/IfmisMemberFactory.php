<?php

namespace Database\Factories;

use App\Http\Traits\Translate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IfmisMember>
 */
class IfmisMemberFactory extends Factory
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
        $job_ar=$translateGoogle->translate(fake()->realText(20));
        $country_ar=$translateGoogle->translate(fake()->country);

        return [
            'name'=>fake()->name,
            'name_ar'=>$name_ar,
            'job'=>fake()->realText(15),
            'job_ar'=>$job_ar,
            'country'=>fake()->country,
            'country_ar'=>$country_ar,
            'imageProfile'=>'membersProfile/p1.png',
            'imageFlag'=>'membersFlag/pFlag.png',
        ];
    }
}
