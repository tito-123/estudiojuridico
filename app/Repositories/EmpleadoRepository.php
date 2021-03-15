<?php

namespace App\Repositories;

use App\Models\Empleado;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version March 9, 2021, 9:24 pm UTC
*/

class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'ci',
        'telefono'
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
        return Empleado::class;
    }
}
