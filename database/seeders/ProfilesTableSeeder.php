<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Profile::truncate();
        $faker = \Faker\Factory::create();
        for ($i=0;$i<50; $i++){
            Profile::create([
                'city'=>   $faker->city,
                'gender_id'=>$faker->numerify,
                'orientation_id'=>$faker->numerify,
                'age'=>$faker->randomDigitNotNull,
                'content'=>$faker->sentence,
                'tag'=>$faker->sentence,
            ]);
        }
        //
    }
}
