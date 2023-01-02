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
         'user_id' => 11,
         'address' => 'No.10 , Gamunu road, Matara',
         'phone' => '0775124900',
         'nic' => '973234422v',
         'age' => '34',
         'gender' => 'Female',
         'position' => 'Hospital Nurse',
         'qualification' => 'Diploma',
         'photo_path' =>'1.jfif',
         
      ]);
      DB::table('nurses')->insert([
         'user_id' => 12,
         'address' => 'Kanthi, Gampola Road, Kandy',
         'phone' => '0775124900',
         'nic' => '973234422v',
         'age' => '34',
         'gender' => 'Female',
         'position' => 'Hospital Nurse',
         'qualification' => 'Diploma',
         'photo_path' =>'2.jfif',
         
      ]);
      DB::table('nurses')->insert([
         'user_id' => 13,
         'address' => 'No.24/5, Thumpane Road, Rathnapura',
         'phone' => '0775124900',
         'nic' => '973234422v',
         'age' => '34',
         'gender' => 'Female',
         'position' => 'Surgical Nurse',
         'qualification' => 'Diploma',
         'photo_path' =>'5.jfif',
         
      ]);
      DB::table('nurses')->insert([
         'user_id' => 14,
         'address' => 'No.33, Adampe Road,Negambo',
         'phone' => '0775124900',
         'nic' => '973234422v',
         'age' => '34',
         'gender' => 'Female',
         'position' => 'Surgical Nurse',
         'qualification' => 'Digree',
         'photo_path' =>'6.jfif',
         
      ]);
      DB::table('nurses')->insert([
         'user_id' => 15,
         'address' => 'No.11/C, Kumari, Koswaththa, Galle',
         'phone' => '0775124900',
         'nic' => '973234422v',
         'age' => '34',
         'gender' => 'Female',
         'position' => 'Surgical Nurse',
         'qualification' => 'Digree',
         'photo_path' =>'11.jfif',
         
      ]);
    }
}
