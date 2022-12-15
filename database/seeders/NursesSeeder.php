<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nurses')->insert([
            'user_id' => 6,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'position' => Str::random(10),
            'qualification' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('nurses')->insert([
            'user_id' => 7,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'position' => Str::random(10),
            'qualification' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('nurses')->insert([
            'user_id' => 8,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'position' => Str::random(10),
            'qualification' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('nurses')->insert([
            'user_id' => 9,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'position' => Str::random(10),
            'qualification' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('nurses')->insert([
            'user_id' => 10,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'position' => Str::random(10),
            'qualification' => Str::random(10),
            'photo_path' =>'/h/h',
            
         ]);
    }
}
