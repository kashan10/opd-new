<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            'user_id' => 1,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'specialization'=> Str::random(10),
            'position' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('doctors')->insert([
            'user_id' => 2,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'specialization'=> Str::random(10),
            'position' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('doctors')->insert([
            'user_id' => 3,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'specialization'=> Str::random(10),
            'position' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('doctors')->insert([
            'user_id' => 4,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'specialization'=> Str::random(10),
            'position' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('doctors')->insert([
            'user_id' => 5,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'specialization'=> Str::random(10),
            'position' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);

      
    }
}
