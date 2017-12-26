<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Numuniones
 * @package App\Models
 * @version July 19, 2017, 10:49 pm UTC
 */
class Numuniones extends Model
{
    use SoftDeletes;

    public $table = 'numuniones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idpjuridicas',
        'idunionestemporales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpjuridicas' => 'integer',
        'idunionestemporales' => 'integer'
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
    public function pjuridicas()
    {
        return $this->belongsTo(\App\Models\pjuridicas::class, 'idpjuridicas', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unionestemporales()
    {
        return $this->belongsTo(\App\Models\unionestemporales::class, 'idunionestemporales', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function numunions()
    {
        return $this->belongsToMany(\App\Models\numunion::class, 'pjuridicas_unionestemporales', 'idpjuridicas', 'idunionestemporales');
    }
}
