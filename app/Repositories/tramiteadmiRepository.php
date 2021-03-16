<?php

namespace App\Repositories;

use App\Models\tramiteadmi;
use App\Repositories\BaseRepository;

/**
 * Class tramiteadmiRepository
 * @package App\Repositories
 * @version March 16, 2021, 7:37 am UTC
*/

class tramiteadmiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'tipotramite',
        'estado',
        'personas',
        'cita',
        'idcliente'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tramiteadmi::class;
    }
}
