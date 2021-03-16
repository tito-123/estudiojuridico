<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empleado
 * @package App\Models
 * @version March 9, 2021, 9:24 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property integer $ci
 * @property string $telefono
 * @property integer $iduser
 */
class Empleado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'empleados';
     protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
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
        'telefono' => 'required|numeric'
      
    ];

    
}
