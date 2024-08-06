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
            ['name' => 'Appartement'],
            ['name' => 'Maison'],
            ['name' => 'Terrain'],
            // Ajoutez d'autres types de biens si nécessaire
        ]);
    }
}