<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Repositories\EmpleadoRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\User;
use Flash;
use Response;


class EmpleadoController extends AppBaseController
{
    /** @var  EmpleadoRepository */
    private $empleadoRepository;

    public function __construct(EmpleadoRepository $empleadoRepo)
    {
        $this->empleadoRepository = $empleadoRepo;
    }

    /**
     * Display a listing of the Empleado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$empleados = $this->empleadoRepository->all();
        $empleados = DB::table('empleados as em')
            ->join('users as u','u.id','=','em.iduser')
            ->where('u.tipo','=','empleado')
            ->where('em.deleted_at','=',null)
            ->select(DB::raw('em.id,em.nombre,em.apellido,em.ci,em.telefono,u.name,u.email,u.id as iduser'))
            ->get();

        return view('empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new Empleado.
     *
     * @return Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created Empleado in storage.
     *
     * @param CreateEmpleadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpleadoRequest $request)
    {
        $input = $request->all();
//$input->iduser=2;
     //   $empleado = $this->empleadoRepository->create($input);
//dd($input);
         $user=new User();
          $user->name=$request->get('name');
          $user->email=$request->get('email');
          $user->password=$request->get('password');
          $user->tipo="empleado";
          $user->save();


           $empleado=new Empleado();
          $empleado->ci=$request->get('ci');
          $empleado->nombre=$request->get('nombre');
          $empleado->apellido=$request->get('apellido');
          $empleado->telefono=$request->get('telefono');
           $empleado->iduser=$user->id;
          $empleado->save();



        Flash::success('Empleado saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified Empleado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {dd("hola");
        //$empleado = $this->empleadoRepository->find($id);
$empleado = Empleado::find($id);
//dd($empleado);
        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified Empleado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       // $empleado = $this->empleadoRepository->find($id);
        $empleado = DB::table('empleados as em')
            ->join('users as u','u.id','=','em.iduser')
            ->where('em.id','=',$id)
            ->select(DB::raw('em.id,em.nombre,em.apellido,em.ci,em.telefono,u.name,u.email,u.id as iduser'))
            ->first();

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }
//dd($empleado);
        return view('empleados.edit')->with('empleado', $empleado);
       //  return view('empleados.edit',compact('empleado','num'));
    }

    /**
     * Update the specified Empleado in storage.
     *
     * @param int $id
     * @param UpdateEmpleadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpleadoRequest $request)
    {

        $empleado = $this->empleadoRepository->find($id);
     //  dd($request->all());
        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

        $empleado = $this->empleadoRepository->update($request->all(), $id);
 /*$empleado=new Empleado();
          $empleado->ci=$request->get('ci');
          $empleado->nombre=$request->get('nombre');
          $empleado->apellido=$request->get('apellido');
          $empleado->telefono=$request->get('telefono');
           $empleado->iduser=$request->get('iduser');
          $empleado->save();**/
           $user = User::find($request->iduser);
        //  $user=new User();
          $user->name=$request->get('name');
          $user->email=$request->get('email');
          $user->password=$request->get('password');
          $user->save();
        Flash::success('Empleado updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified Empleado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
         $empleado = Empleado::find($id);

        if (empty($empleado)) {
            Flash::error('Empleado not found');

            return redirect(route('empleados.index'));
        }

 $empleado->delete();
        Flash::success('Empleado deleted successfully.');

        return redirect(route('empleados.index'));
    }
}
