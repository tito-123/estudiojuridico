<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Repositories\ClienteRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use Flash;
use Response;

class ClienteController extends AppBaseController
{
    /** @var  ClienteRepository */
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the Cliente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$clientes = $this->clienteRepository->all();
 $clientes = DB::table('clientes as em')
            ->join('users as u','u.id','=','em.iduser')
            ->where('u.tipo','=','cliente')
            ->where('em.deleted_at','=',null)
            ->select(DB::raw('em.id,em.nombre,em.apellido,em.ci,em.telefono,em.domicilio,u.name,u.email,u.id as iduser'))
            ->get();
        return view('clientes.index')
            ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new Cliente.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created Cliente in storage.
     *
     * @param CreateClienteRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteRequest $request)
    {
         $input = $request->all();
//$input->iduser=2;
     //   $empleado = $this->empleadoRepository->create($input);
//dd($input);
         $user=new User();
          $user->name=$request->get('name');
          $user->email=$request->get('email');
          $user->password=$request->get('password');
          $user->tipo="cliente";
          $user->save();


           $cliente=new Cliente();
          $cliente->ci=$request->get('ci');
          $cliente->nombre=$request->get('nombre');
          $cliente->apellido=$request->get('apellido');
          $cliente->telefono=$request->get('telefono');
          $cliente->domicilio=$request->get('domicilio');
          $cliente->iduser=$user->id;
          $cliente->save();

        Flash::success('Cliente saved successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified Cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified Cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //$cliente = $this->clienteRepository->find($id);
 $cliente = DB::table('clientes as em')
            ->join('users as u','u.id','=','em.iduser')
            ->where('em.id','=',$id)
            ->select(DB::raw('em.id,em.nombre,em.apellido,em.ci,em.telefono,u.name,u.email,em.domicilio,u.id as iduser'))
            ->first();
        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified Cliente in storage.
     *
     * @param int $id
     * @param UpdateClienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteRequest $request)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $cliente = $this->clienteRepository->update($request->all(), $id);
           $user = User::find($request->iduser);
        //  $user=new User();
          $user->name=$request->get('name');
          $user->email=$request->get('email');
          $user->password=$request->get('password');
          $user->save();
        Flash::success('Cliente updated successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified Cliente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $this->clienteRepository->delete($id);

        Flash::success('Cliente deleted successfully.');

        return redirect(route('clientes.index'));
    }
}
