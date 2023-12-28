<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(0, 200) as $index) {
           People::create([
                'name' => $faker->name,
                'lastname' => $faker->last_name,
                'nr_phone'  => $faker->phone_number
            ]);
        }
    }
}

?>