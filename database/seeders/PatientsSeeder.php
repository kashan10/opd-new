<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('patients')->insert([
            'user_id' => 11,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'bloodgroup'=>'AB',
            'bloodgroup'=>'AB',
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('patients')->insert([
            'user_id' => 12,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'bloodgroup'=>'AB',
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('patients')->insert([
            'user_id' => 13,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'bloodgroup'=>'AB',
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('patients')->insert([
            'user_id' => 14,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'bloodgroup'=>'AB',
            'photo_path' =>'/h/h',
            
         ]);
         DB::table('patients')->insert([
            'user_id' => 15,
            'address' => Str::random(10),
            'phone' => '0775124900',
            'address' => Str::random(10),
            'nic' => '973234422v',
            'age' => '34',
            'gender' => 'Male',
            'bloodgroup'=>'AB',
            'photo_path' =>'/h/h',
            
         ]);
    }
}
