<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Unionestemporales
 * @package App\Models
 * @version May 26, 2017, 1:18 am UTC
 */
class Unionestemporales extends Model
{
    use SoftDeletes;

    public $table = 'unionestemporales';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'porcentaje',
        'idpjuridicas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpjuridicas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'porcentaje' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pjuridicas()
    {
        return $this->belongsTo(\App\Models\pjuridicas::class, 'idpjuridicas', 'id');
    }
}
