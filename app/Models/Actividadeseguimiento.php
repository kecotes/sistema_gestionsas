<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actividadeseguimiento
 * @package App\Models
 * @version January 23, 2018, 9:45 pm UTC
 *
 * @property \App\Models\actividadescontratos actividadescontratos
 * @property string nombreinforme
 * @property integer idactividadescontratos
 */
class Actividadeseguimiento extends Model
{
    use SoftDeletes;

    public $table = 'actividadeseguimientos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreinforme',
        'idactividadescontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombreinforme' => 'string',
        'idactividadescontratos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreinforme' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function actividadescontratos()
    {
        return $this->belongsTo(\App\Models\actividadescontratos::class, 'idactividadescontratos', 'id');
    }
}
