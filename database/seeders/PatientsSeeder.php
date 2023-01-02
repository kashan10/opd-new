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
         'user_id' => 21,
         'address' => 'No.10, Katuibula Road, Nawala',
         'phone' => '0777894236',
         'nic' => '671248985v',
         'age' => '55',
         'gender' => 'Male',
         'bloodgroup'=>'AB-',
         'photo_path' =>'3.jfif',
         
      ]);

      DB::table('patients')->insert([
         'user_id' => 22,
         'address' =>'Sinaha Piayasa, Gonawala Road,Padukka',
         'phone' => '0751236845',
         'nic' => '904316872v',
         'age' => '32',
         'gender' => 'Male',
         'bloodgroup'=>'B+',
         'photo_path' =>'4.jfif',
         
      ]);

      DB::table('patients')->insert([
         'user_id' => 23,
         'address' => 'No.45, Gamage Road, Mawanalla',
         'phone' => '0723459128',
         'nic' => '704318624v',
         'age' => '52',
         'gender' => 'Male',
         'bloodgroup'=>'AB+',
         'photo_path' =>'7.jfif',
         
      ]);

      DB::table('patients')->insert([
         'user_id' => 24,
         'address' => 'No.4/5, Akurassa, Matara',
         'phone' => '0724531876',
         'nic' => '973223154v',
         'age' => '25',
         'gender' => 'Male',
         'bloodgroup'=>'A-',
         'photo_path' =>'8.jfif',
         
      ]);

      DB::table('patients')->insert([
         'user_id' => 25,
         'address' => 'NO:78, Piatabadda, Kaluthara',
         'phone' => '0775124990',
         'nic' => '824531276v',
         'age' => '40',
         'gender' => 'Male',
         'bloodgroup'=>'B+',
         'photo_path' =>'10.jfif',
         
      ]);
    }
}
