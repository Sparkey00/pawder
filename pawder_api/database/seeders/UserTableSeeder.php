<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            // Let's clear the users table first
            User::truncate();

            $faker = \Faker\Factory::create();

            // Let's make sure everyone has the same password and
            // let's hash it before the loop, or else our seeder
            // will be too slow.
            $password = Hash::make('admin');

            User::create([
                'name' => 'Administrator',
                'email' => 'admin@test.com',
                'password' => $password,
                'gender' => rand(1,2),
                'date_of_birth' => $faker->dateTimeBetween('-10 years', '-1 years'),
                'description' => $faker->text(),
            ]);

            // And now let's generate a few dozen users for our app:
            for ($i = 0; $i < 10; $i++) {
                User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'gender' => rand(1,2),
                    'date_of_birth' => $faker->dateTimeBetween('-10 years', '-1 years'),
                    'description' => $faker->text(),
                    'password' => $password,
                ]);
            }
        } catch (\Throwable $exception) {
            var_dump($exception);
        }

    }
}
