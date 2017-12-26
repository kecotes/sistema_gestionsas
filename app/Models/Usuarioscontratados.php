<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuarioscontratados
 * @package App\Models
 * @version December 15, 2017, 3:44 pm UTC
 *
 * @property \App\Models\personas personas
 * @property \App\Models\contratos contratos
 * @property \Illuminate\Database\Eloquent\Collection personasContratos
 * @property integer idpersonas
 * @property integer idcontratos
 */
class Usuarioscontratados extends Model
{
    use SoftDeletes;

    public $table = 'usuarioscontratados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idpersonas',
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpersonas' => 'integer',
        'idcontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function personas()
    {
        return $this->belongsTo(\App\Models\personas::class, 'idpersonas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function usuariocontratados()
    {
        return $this->belongsToMany(\App\Models\usuariocontratado::class, 'personas_contratos', 'idpersonas', 'idcontratos');
    }
}
