<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\CommonSection;
use App\Models\IfmisMember;
use App\Models\JoinRoom;
use App\Models\newsAds;
use App\Models\PostCompatition;
use App\Models\UserCountry;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $jsonFile=File::get(public_path("data.json"));
        $data=json_decode($jsonFile);
        foreach($data as $listJson){
            UserCountry::create([
                'user_id'=>$listJson->user_id,
                'country'=>$listJson->country,
            ]);
        }
     //   Admin::factory(1)->create();
        // newsAds::factory(20)->create();
        //PostCompatition::factory(1)->create();
    // JoinRoom::factory(10)->create();
      //  IfmisMember::factory(3)->create();
       // CommonSection::factory(5)->create();
        // \App\Models\Product::factory(4)->create();
      // \App\Models\Store::factory(4)->create();
     ///   \App\Models\User::factory(10)->create();
     //\App\Models\Course::factory(4)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
