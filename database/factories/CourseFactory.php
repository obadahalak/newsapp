<?php

namespace Database\Factories;

use App\Http\Traits\Translate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $test = new   Translate();
        // $name='';
        // $details=fake()->realText(20);
        return [
            'name_ar'=>'كورس  تصميم متقدم',
            'name'=>$test->translate('كورس  تصميم متقدم'),
            'details_ar'=>'مدة الكورس 20 ساعة لمدة 2 شهور',
            'details'=>$test->translate('مدة الكورس 20 ساعة لمدة 2 شهور'),
        ];
    }
}
