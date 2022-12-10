<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            [
                'treatment' => 'Teeth Cleanings',
                'time' => 60,
                'created_at' => now(),
                'updated_at' => now()
                
            ]
        ]);

        DB::table('treatments')->insert([
            [
                'treatment' => 'Teeth Whitening',
                'time' => 60,
                'created_at' => now(),
                'updated_at' => now()
               
            ]
        ]);

        DB::table('treatments')->insert([
            [
                'treatment' => 'Extractions',
                'time' => 60,
                'created_at' => now(),
                'updated_at' => now()
               
            ]
        ]);

        DB::table('treatments')->insert([
            [
                'treatment' => 'Fillings',
                'time' => 60,
                'created_at' => now(),
                'updated_at' => now()
               
            ]
        ]);

    }
}
