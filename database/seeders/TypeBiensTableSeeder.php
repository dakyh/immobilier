<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeBiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typebiens')->insert([
            ['name' => 'immeubles'],
            ['name' => 'immeubles'],
            ['name' => 'terrains'],
            // Ajoutez d'autres types de biens si nécessaire
        ]);
    }
}