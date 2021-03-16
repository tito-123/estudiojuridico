<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\empleado;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
             
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='admin';
        $user->save();
      

        $empleado = new empleado();
        $empleado->nombre = 'adminAdmin';
     	$empleado->apellido = 'adminAdmin';
        $empleado->ci = 4545454;
        $empleado->telefono = '123456789';
        $empleado->iduser = $user->id;
        $empleado->save(); 
    }
}
