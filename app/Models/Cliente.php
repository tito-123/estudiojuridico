<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cliente
 * @package App\Models
 * @version March 9, 2021, 8:59 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property integer $ci
 * @property string $telefono
 * @property string $domicilio
 * @property integer $iduser
 */
class Cliente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'domicilio',
        'iduser'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'ci' => 'integer',
        'telefono' => 'string',
        'domicilio' => 'string',
        'iduser' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'ci' => 'required|numeric',
        'telefono' => 'required|numeric',
        'domicilio' => 'required'
      
    ];

    
}
