<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctramiteadmiRequest;
use App\Http\Requests\UpdateDoctramiteadmiRequest;
use App\Repositories\DoctramiteadmiRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\doctramiteadmi;
use Flash;
use Response;

class DoctramiteadmiController extends AppBaseController
{
    /** @var  DoctramiteadmiRepository */
    private $doctramiteadmiRepository;

    public function __construct(DoctramiteadmiRepository $doctramiteadmiRepo)
    {
        $this->doctramiteadmiRepository = $doctramiteadmiRepo;
    }

    /**
     * Display a listing of the Doctramiteadmi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $doctramiteadmis = $this->doctramiteadmiRepository->all();

        return view('doctramiteadmis.index')
            ->with('doctramiteadmis', $doctramiteadmis);
    }

    /**
     * Show the form for creating a new Doctramiteadmi.
     *
     * @return Response
     */
    public function create()
    {
        $tramiteadmis = DB::table('tramiteadmis as tra')
            ->join('clientes as cli','cli.id','=','tra.idcliente')
            ->where('cli.deleted_at','=',null)
            ->select(DB::raw('tra.id,tra.nombre,cli.nombre as nombrecli,cli.apellido'))
            ->get();
        //return view('tramiteadmis.create');

      //  return view('doctramiteadmis.create');
            return view('doctramiteadmis.create')->with('tramiteadmis', $tramiteadmis);
    }

    /**
     * Store a newly created Doctramiteadmi in storage.
     *
     * @param CreateDoctramiteadmiRequest $request
     *
     * @return Response
     */
    public function store(CreateDoctramiteadmiRequest $request)
    {
        $input = $request->all();
        $doctramiteadmi=new Doctramiteadmi();
        $doctramiteadmi->nombre=$request->get('nombre');
        $doctramiteadmi->tipo=$request->get('tipo');
        $doctramiteadmi->clase=$request->get('clase');

        if($request->hasFile('documento')){

          /*  $file       = $request->file('image');
            $path       = public_path().'/images/categories';
            $filename   = uniqid().$file->getClientOriginalName();
            $moved      = $file->move($path,$filename);*/

             $file=$request->file('documento');
        $filename   = uniqid().$file->getClientOriginalName();
        //$imgname=$nombre.$imgname;
       
         \Storage::disk('local')->put($filename,  \File::get($file));
          $ruta='images/'.$filename;
        $url = asset($ruta);
           // $extension = pathinfo($path, PATHINFO_EXTENSION);
            //crear un registro en la base de datos
            //if($moved){
       
                 $doctramiteadmi->documento=$url;
        $doctramiteadmi->idtramiteadmi=$request->idtramiteadmi;
                $doctramiteadmi->save();
            //}
        }

     //   $doctramiteadmi = $this->doctramiteadmiRepository->create($input);

        Flash::success('Doctramiteadmi saved successfully.');

        return redirect(route('doctramiteadmis.index'));
    }

    /**
     * Display the specified Doctramiteadmi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctramiteadmi = $this->doctramiteadmiRepository->find($id);

        if (empty($doctramiteadmi)) {
            Flash::error('Doctramiteadmi not found');

            return redirect(route('doctramiteadmis.index'));
        }

        return view('doctramiteadmis.show')->with('doctramiteadmi', $doctramiteadmi);
    }

    /**
     * Show the form for editing the specified Doctramiteadmi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctramiteadmi = $this->doctramiteadmiRepository->find($id);

        if (empty($doctramiteadmi)) {
            Flash::error('Doctramiteadmi not found');

            return redirect(route('doctramiteadmis.index'));
        }

        return view('doctramiteadmis.edit')->with('doctramiteadmi', $doctramiteadmi);
    }

    /**
     * Update the specified Doctramiteadmi in storage.
     *
     * @param int $id
     * @param UpdateDoctramiteadmiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoctramiteadmiRequest $request)
    {
        $doctramiteadmi = $this->doctramiteadmiRepository->find($id);

        if (empty($doctramiteadmi)) {
            Flash::error('Doctramiteadmi not found');

            return redirect(route('doctramiteadmis.index'));
        }

        $doctramiteadmi = $this->doctramiteadmiRepository->update($request->all(), $id);

        Flash::success('Doctramiteadmi updated successfully.');

        return redirect(route('doctramiteadmis.index'));
    }

    /**
     * Remove the specified Doctramiteadmi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctramiteadmi = $this->doctramiteadmiRepository->find($id);

        if (empty($doctramiteadmi)) {
            Flash::error('Doctramiteadmi not found');

            return redirect(route('doctramiteadmis.index'));
        }

        $this->doctramiteadmiRepository->delete($id);

        Flash::success('Doctramiteadmi deleted successfully.');

        return redirect(route('doctramiteadmis.index'));
    }
}
