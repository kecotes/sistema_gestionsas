<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pjuridicas
 * @package App\Models
 * @version May 26, 2017, 1:17 am UTC
 */
class Pjuridicas extends Model
{
    use SoftDeletes;

    public $table = 'pjuridicas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'ciudad',
        'departamento',
        'tipopjuridica',
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
        'ciudad' => 'string',
        'departamento' => 'string',
        'tipopjuridica' => 'string',
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
    public function unionestemporales()
    {
        return $this->hasMany(\App\Models\unionestemporales::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function personas()
    {
        return $this->belongsTo(\App\Models\personas::class, 'idpersonas', 'id');
    }
}
