<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Doctramiteadmi
 * @package App\Models
 * @version March 16, 2021, 9:38 am UTC
 *
 * @property string $nombre
 * @property string $tipo
 * @property string $clase
 * @property string $documento
 * @property integer $idtramiteadmi
 */
class Doctramiteadmi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'doctramiteadmis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'tipo',
        'clase',
        'documento',
        'idtramiteadmi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'tipo' => 'string',
        'clase' => 'string',
        'documento' => 'string',
        'idtramiteadmi' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'tipo' => 'required',
        'clase' => 'required',
        'documento' => 'required',
        'idtramiteadmi' => 'required'
    ];

    
}
