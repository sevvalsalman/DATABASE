<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker= Factory::create();
    //    for ($i=0 ; $i<1000  ; $i++) {

    //         Company::create([
    //             'title' => $faker->company,
    //             'head_count' => $faker->numberBetween(0,200),
    //             'address' => $faker->address
    //         ]) ;
    //    }

    //    for ($i=0 ; $i<10000  ; $i++) {

    //         Project::create([
    //             'company_id' => Company::inRandomOrder()->first()->id,
    //             'name' => $faker->name,
    //             'amount' => $faker->numberBetween(100,1000),
    //             'topic' => $faker->realText()
    //         ]) ;
    //    }

    }
}
