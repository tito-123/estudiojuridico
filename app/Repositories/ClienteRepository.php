<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version March 9, 2021, 8:59 pm UTC
*/

class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'domicilio'
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
        return Cliente::class;
    }
}
