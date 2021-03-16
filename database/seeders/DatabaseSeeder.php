<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cliente;
use App\Models\tramiteadmi;
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
       //admin      
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
//empleado
         $user = new User();
        $user->name = 'juan';
        $user->email = 'juan@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='empleado';
        $user->save();
      

        $empleado = new empleado();
        $empleado->nombre = 'juan';
        $empleado->apellido = 'perez rocabado';
        $empleado->ci = 7545454;
        $empleado->telefono = '123456789';
        $empleado->iduser = $user->id;
        $empleado->save(); 



         $user = new User();
        $user->name = 'sergio';
        $user->email = 'sergio@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='empleado';
        $user->save();
      

        $empleado = new empleado();
        $empleado->nombre = 'sergio';
        $empleado->apellido = 'arana paz';
        $empleado->ci = 5745454;
        $empleado->telefono = '123456789';
        $empleado->iduser = $user->id;
        $empleado->save(); 

// cliente
         $user = new User();
        $user->name = 'nicolas';
        $user->email = 'nicolas@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='cliente';
        $user->save();
      

        $Cliente = new Cliente();
        $Cliente->nombre = 'nicolas';
        $Cliente->apellido = 'suarez guebara';
        $Cliente->ci = 6985454;
        $Cliente->telefono = '123456789';
        $Cliente->domicilio = 'calle los olmos nro 356';
        $Cliente->iduser = $user->id;
        $Cliente->save(); 

          $tramiteadmi = new tramiteadmi();
        $tramiteadmi->nombre = 'compra de terreno en irpavi 2';
        $tramiteadmi->descripcion = 'el señor nicolas suarez guebara desea comprar un terreno en irpavi 2, se requiere verificar que los documentos de propiedad esten al dia y tambien la validacion de los propietarios';
        $tramiteadmi->tipotramite = "compra de terreno";
        $tramiteadmi->estado = 'inicial';
        $tramiteadmi->personas = 'juan laime veltran';
        $tramiteadmi->cita = "2021-03-17";
        $tramiteadmi->idcliente=$Cliente->id;
        $tramiteadmi->save(); 



        $user = new User();
        $user->name = 'sebastian';
        $user->email = 'sebastian@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='cliente';
        $user->save();
      

        $Cliente = new Cliente();
        $Cliente->nombre = 'sebastian';
        $Cliente->apellido = 'rodriguez pinedo';
        $Cliente->ci = 4385454;
        $Cliente->telefono = '123456789';
        $Cliente->domicilio = 'Av. parapeti zona virgen de lujan';
        $Cliente->iduser = $user->id;
        $Cliente->save(); 



        $user = new User();
        $user->name = 'americo';
        $user->email = 'americo@example.com';
        $user->password = bcrypt('123456789');
        $user->tipo='cliente';
        $user->save();
      

        $Cliente = new Cliente();
        $Cliente->nombre = 'americo';
        $Cliente->apellido = 'tola saavedra';
        $Cliente->ci = 6985454;
        $Cliente->telefono = '123456789';
        $Cliente->domicilio = 'barrio villa fatima 4to anillo';
        $Cliente->iduser = $user->id;
        $Cliente->save(); 
    }
}
