<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetramiteadmiRequest;
use App\Http\Requests\UpdatetramiteadmiRequest;
use App\Repositories\tramiteadmiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Flash;
use Response;

class tramiteadmiController extends AppBaseController
{
    /** @var  tramiteadmiRepository */
    private $tramiteadmiRepository;

    public function __construct(tramiteadmiRepository $tramiteadmiRepo)
    {
        $this->tramiteadmiRepository = $tramiteadmiRepo;
    }

    /**
     * Display a listing of the tramiteadmi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tramiteadmis = $this->tramiteadmiRepository->all();


       return view('tramiteadmis.index')->with('tramiteadmis', $tramiteadmis);
       //  return view('tramiteadmis.index',compact('tramiteadmis','clientes'));
    }

    /**
     * Show the form for creating a new tramiteadmi.
     *
     * @return Response
     */
    public function create()
    {
         $clientes = Cliente::all();

        //return view('tramiteadmis.create');
    //     dd($clientes);
         return view('tramiteadmis.create',compact('clientes'));
          //return view('tramiteadmis.create')->with('clientes', $clientes);
    }

    /**
     * Store a newly created tramiteadmi in storage.
     *
     * @param CreatetramiteadmiRequest $request
     *
     * @return Response
     */
    public function store(CreatetramiteadmiRequest $request)
    {
        $input = $request->all();

        $tramiteadmi = $this->tramiteadmiRepository->create($input);

        Flash::success('Tramiteadmi saved successfully.');

        return redirect(route('tramiteadmis.index'));
    }

    /**
     * Display the specified tramiteadmi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tramiteadmi = $this->tramiteadmiRepository->find($id);

        if (empty($tramiteadmi)) {
            Flash::error('Tramiteadmi not found');

            return redirect(route('tramiteadmis.index'));
        }

        return view('tramiteadmis.show')->with('tramiteadmi', $tramiteadmi);
    }

    /**
     * Show the form for editing the specified tramiteadmi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {  $clientes = Cliente::all();
        $tramiteadmi = $this->tramiteadmiRepository->find($id);
            $cliente2=Cliente::find($tramiteadmi->idcliente);
        if (empty($tramiteadmi)) {
            Flash::error('Tramiteadmi not found');

            return redirect(route('tramiteadmis.index'));
        }

      //  return view('tramiteadmis.edit')->with('tramiteadmi', $tramiteadmi);
         return view('tramiteadmis.edit',compact('tramiteadmi','clientes','cliente2'));
    }

    /**
     * Update the specified tramiteadmi in storage.
     *
     * @param int $id
     * @param UpdatetramiteadmiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetramiteadmiRequest $request)
    {
        $tramiteadmi = $this->tramiteadmiRepository->find($id);

        if (empty($tramiteadmi)) {
            Flash::error('Tramiteadmi not found');

            return redirect(route('tramiteadmis.index'));
        }

        $tramiteadmi = $this->tramiteadmiRepository->update($request->all(), $id);

        Flash::success('Tramiteadmi updated successfully.');

        return redirect(route('tramiteadmis.index'));
    }

    /**
     * Remove the specified tramiteadmi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tramiteadmi = $this->tramiteadmiRepository->find($id);

        if (empty($tramiteadmi)) {
            Flash::error('Tramiteadmi not found');

            return redirect(route('tramiteadmis.index'));
        }

        $this->tramiteadmiRepository->delete($id);

        Flash::success('Tramiteadmi deleted successfully.');

        return redirect(route('tramiteadmis.index'));
    }
}
