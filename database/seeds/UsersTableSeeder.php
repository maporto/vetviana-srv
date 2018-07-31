<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();
        $faker = \Faker\Factory::create('pt_BR');
        // And now, let's create a few articles in our database:
        User::create([
            'name' => $faker->name,
            'email'  => 'test@test.com',
            'password' => bcrypt('123456'),
            'pessoafisica_id' => rand(1,50),
        ]);
    }
}