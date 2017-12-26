<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipoactividades
 * @package App\Models
 * @version May 26, 2017, 3:09 am UTC
 */
class Tipoactividades extends Model
{
    use SoftDeletes;

    public $table = 'tipoactividades';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipoactividad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipoactividad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoactividad' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function actividadescontratos()
    {
        return $this->hasMany(\App\Models\actividadescontratos::class);
    }
}
