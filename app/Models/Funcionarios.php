<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionarios
 * @package App\Models
 * @version May 26, 2017, 1:06 am UTC
 */
class Funcionarios extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'tipofuncionario',
        'usuario',
        'contrasena',
        'idpnaturales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'tipofuncionario' => 'string',
        'usuario' => 'string',
        'contrasena' => 'string',
        'idpnaturales' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'usuario' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function permisos()
    {
        return $this->hasMany(\App\Models\permisos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pnaturales()
    {
        return $this->belongsTo(\App\Models\pnaturales::class, 'idpnaturales', 'id');
    }
}
