<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permisos
 * @package App\Models
 * @version May 26, 2017, 1:08 am UTC
 */
class Permisos extends Model
{
    use SoftDeletes;

    public $table = 'permisos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipopermiso',
        'idfuncionarios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipopermiso' => 'string',
        'idfuncionarios' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipopermiso' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function funcionarios()
    {
        return $this->belongsTo(\App\Models\funcionarios::class, 'idfuncionarios', 'id');
    }
}
