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
         'user_id' => 2,
         'address' => 'No.5/A, Main Street, Matara',
         'phone' => '0714552231',
         'nic' => '973234422v',
         'age' => '25',
         'gender' => 'Male',
         'specialization'=> 'Teeth Cleaning',
         'position' => 'Grade 1',
         'photo_path' =>'3.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 3,
         'address' => 'Abaya, Rathgama, Galle',
         'phone' => '0775556542',
         'nic' => '923156822v',
         'age' => '30',
         'gender' => 'Female',
         'specialization'=> 'Crowns',
         'position' => 'Grade 3',
         'photo_path' =>'1.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 4,
         'address' => 'No.25/5B, Gammanagedara, Hali-ela',
         'phone' => '0714552231',
         'nic' => '703405026v',
         'age' => '52',
         'gender' => 'Female',
         'specialization'=> 'Nurve Filling',
         'position' => 'Grade 3',
         'photo_path' =>'2.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 5,
         'address' => '120/4C, Navimana, Matara',
         'phone' => '0744558931',
         'nic' => '883215422v',
         'age' => '34',
         'gender' => 'Male',
         'specialization'=> 'Bonding',
         'position' => 'Grade 1',
         'photo_path' =>'4.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 6,
         'address' => 'No.5/A, Main Street, Matara',
         'phone' => '0724792231',
         'nic' => '823234422v',
         'age' => '40',
         'gender' => 'Male',
         'specialization'=> 'Veeners',
         'position' => 'Grade 1',
         'photo_path' =>'7.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 7,
         'address' => 'Sisila, Old Market Road, Denipitiya',
         'phone' => '0775124900',
         'nic' => '885679115v',
         'age' => '34',
         'gender' => 'Male',
         'specialization'=> 'Extractions',
         'position' => 'Consultant',
         'photo_path' =>'8.jfif',
               
      ]);

      DB::table('doctors')->insert([
         'user_id' => 8,
         'address' => 'No.44/2B, Muhagoda, Maramba, Akuressa',
         'phone' => '0746579851',
         'nic' => '825826452v',
         'age' => '40',
         'gender' => 'Female',
         'specialization'=> 'Nurve Filling',
         'position' => 'Grade 1',
         'photo_path' =>'9.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 9,
         'address' => 'Anura, Dodamgaslanda, Bandarawela',
         'phone' => '0761251254',
         'nic' => '805948123v',
         'age' => '42',
         'gender' => 'Female',
         'specialization'=> 'Root Canel',
         'position' => 'Physician',
         'photo_path' =>'11.jfif',
         
      ]);

      DB::table('doctors')->insert([
         'user_id' => 10,
         'address' => '143/e Lahuwala Road, Seeduwa',
         'phone' => '0711222254',
         'nic' => '975959423v',
         'age' => '25',
         'gender' => 'Female',
         'specialization'=> 'Bonding',
         'position' => 'Physician',
         'photo_path' =>'1.jfif',
         
      ]);
      
    }
}
