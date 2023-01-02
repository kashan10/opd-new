<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Doctors
        $role = Role::create(['name' => 'doctor']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);

        $user = User::create([
            'name' => 'Lahiru Herath',
            'email' => 'lahiru@gmail.com',
            'password' => bcrypt('lahiru123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Dilsha Hettiarachchi',
            'email' => 'dilsha@gmail.com',
            'password' => bcrypt('dilsha123'),
        ]);
        $user->assignRole('doctor');
        
        $user = User::create([
            'name' => 'Avishka Fernando',
            'email' => 'avishka@gmail.com',
            'password' => bcrypt('avishka123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Kushan Swarnapala',
            'email' => 'kushan@gmail.com',
            'password' => bcrypt('kushan123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Dasun Peris',
            'email' => 'dasun@gmail.com',
            'password' => bcrypt('dasun123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Sandamali Perera',
            'email' => 'sandamali@gmail.com',
            'password' => bcrypt('sandamali123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Shashi Rathnaweera',
            'email' => 'shashi@gmail.com',
            'password' => bcrypt('shashi123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Kavindi Apsara',
            'email' => 'kavindi@gmail.com',
            'password' => bcrypt('kavindi123'),
        ]);
        $user->assignRole('doctor');

        $user = User::create([
            'name' => 'Gayani Dilrukshi',
            'email' => 'gayani@gmail.com',
            'password' => bcrypt('gayani123'),
        ]);
        $user->assignRole('doctor');

        //Nurses
        $role = Role::create(['name' => 'nurse']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);

        $user = User::create([
            'name' => 'Amali Thilakarathne',
            'email' => 'amali@gmail.com',
            'password' => bcrypt('amali123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' => 'Sachini Subasinha',
            'email' => 'sachini@gmail.com',
            'password' => bcrypt('sachini123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' => 'Bagya Senevirathna',
            'email' => 'bagya@gmail.com',
            'password' => bcrypt('bagya123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' => 'Nipun Perera',
            'email' =>'nipun@gmail.com',
            'password' => bcrypt('nipun123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' =>'Chathu Adikari',
            'email' => 'chathu@gmail.com',
            'password' => bcrypt('chathu123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' => 'Lakmali Pathirana',
            'email' => 'lakmali@gmail.com',
            'password' => bcrypt('lakmali123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' =>'Sampath Perera',
            'email' => 'sampath@gmail.com',
            'password' => bcrypt('sampath123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' =>'Parami Perera',
            'email' => 'parami@gmail.com',
            'password' => bcrypt('parami123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' =>'Nishadi Jayakodi',
            'email' => 'nishadi@gmail.com',
            'password' => bcrypt('nishadi123'),
        ]);
        $user->assignRole('nurse');

        $user = User::create([
            'name' =>'Kamala Ranasingha',
            'email' => 'kamala@gmail.com',
            'password' => bcrypt('kamala123'),
        ]);
        $user->assignRole('nurse');

        //Patient
        $role = Role::create(['name' => 'patient']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
        $user = User::create([
            'name' =>'Sunil Rathnasiri',
            'email' => 'sunil@gmail.com',
            'password' => bcrypt('sunil123'),
        ]);
        $user->assignRole('patient');

        $user = User::create([
            'name' =>'Jeewaka Gunarathne',
            'email' => 'jeewaka@gmail.com',
            'password' => bcrypt('jeewaka123'),
        ]);
        $user->assignRole('patient');

        $user = User::create([
            'name' =>'Gotabaya Rajapaksha',
            'email' => 'gotabaya@gmail.com',
            'password' => bcrypt('gotabaya123'),
        ]);
        $user->assignRole('patient');

        $user = User::create([
            'name' =>'Vajira Abewardena',
            'email' => 'vajira@gmail.com',
            'password' => bcrypt('vajira123'),
        ]);
        $user->assignRole('patient');

        $user = User::create([
            'name' =>'Johnstan Fernando',
            'email' => 'jonstan@gmail.com',
            'password' => bcrypt('johnstan123'),
        ]);
        $user->assignRole('patient');
    }
}
