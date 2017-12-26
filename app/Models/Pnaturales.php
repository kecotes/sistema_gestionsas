<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pnaturales
 * @package App\Models
 * @version May 26, 2017, 12:59 am UTC
 */
class Pnaturales extends Model
{
    use SoftDeletes;

    public $table = 'pnaturales';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'tipopnatural',
        'idpersonas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'tipopnatural' => 'string',
        'idpersonas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function funcionarios()
    {
        return $this->hasMany(\App\Models\funcionarios::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function personas()
    {
        return $this->belongsTo(\App\Models\personas::class, 'idpersonas', 'id');
    }
}
