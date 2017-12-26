<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Entidadescontratantes
 * @package App\Models
 * @version June 15, 2017, 4:02 pm UTC
 */
class Entidadescontratantes extends Model
{
    use SoftDeletes;

    public $table = 'entidadescontratantes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'ciudad',
        'departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'ciudad' => 'string',
        'departamento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function contratos()
    {
        return $this->hasMany(\App\Models\contratos::class);
    }
}
