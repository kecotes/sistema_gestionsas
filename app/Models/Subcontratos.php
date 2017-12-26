<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subcontratos
 * @package App\Models
 * @version May 26, 2017, 2:43 am UTC
 */
class Subcontratos extends Model
{
    use SoftDeletes;

    public $table = 'subcontratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idcontratos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
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
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }
}
