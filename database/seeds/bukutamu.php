<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class bukutamu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create();
            $gender = $faker->randomElement(['male', 'female']);
            DB::table('bukutamu')->insert([
                'nama' => $faker->name($gender),
                'email' => $faker->safeEmail,
                'alamat' => $faker->address,
                'jenis_kelamin' => $gender,
            ]);
        }
    }
}
