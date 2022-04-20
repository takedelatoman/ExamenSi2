<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //DB::insert('insert into users (id, name,email,password) values (?,?,?, ?)', [1, 'User','user@gmail.com',
        //Hash::make('123123')//escripta la contra
       

        
        $user=new User() ;
        $user->name='admin';
        $user->email='secretaria@gmail.com';
        $user->password=bcrypt('12345');
        $user->assignRole('Secretaria');//bcrypt encripta la contraseña 
        $user->save();//save con

        $user=new User() ;
        $user->name='doctor';
        $user->email='doctor@gmail.com';
        $user->password=bcrypt('54321');
        $user->assignRole('Medico');//bcrypt encripta la contraseña 
        $user->save();//save con


        $user=new User() ;
        $user->name='paciente';
        $user->email='paciente@gmail.com';
        $user->password=bcrypt('123789');
        $user->assignRole('Paciente');//bcrypt encripta la contraseña 
        $user->save();//save con 
    }
}
