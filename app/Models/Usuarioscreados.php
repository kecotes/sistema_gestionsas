<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuarioscreados
 * @package App\Models
 * @version October 23, 2017, 12:55 am UTC
 */
class Usuarioscreados extends Model
{
    use SoftDeletes;

    public $table = 'usuarioscreados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idpersonas',
        'idusers'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpersonas' => 'integer',
        'idusers' => 'integer'
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
    public function users()
    {
        return $this->belongsTo(\App\Models\users::class, 'idusers', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function usuariocreados()
    {
        return $this->belongsToMany(\App\Models\usuariocreado::class, 'personas_users', 'idpersonas', 'idusers');
    }
}
