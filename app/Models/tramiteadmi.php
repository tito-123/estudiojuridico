<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class tramiteadmi
 * @package App\Models
 * @version March 16, 2021, 7:37 am UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $tipotramite
 * @property string $estado
 * @property string $personas
 * @property string $cita
 * @property integer $idcliente
 */
class tramiteadmi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tramiteadmis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'tipotramite',
        'estado',
        'personas',
        'cita',
        'idcliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'tipotramite' => 'string',
        'estado' => 'string',
        'personas' => 'string',
        'cita' => 'date',
        'idcliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'tipotramite' => 'required',
        'estado' => 'required',
        'personas' => 'required',
        'cita' => 'required',
        'idcliente' => 'required'
    ];

    
}
