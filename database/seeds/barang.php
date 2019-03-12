<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('merek')->get();
        foreach ($users as $user) {
            $faker = Faker::create();
            DB::table('barang')->insert([
                'nama_barang' => $faker->catchPhrase,
                'stok' => $faker->randomNumber(2),
                'harga' => $faker->randomNumber(3) . "000",
                'deskripsi' => $faker->text($maxNbChars = 200),
                'id_merek' => $user->id_merek,
            ]);
        }
    }
}
