<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archivosbalancesfinancieros
 * @package App\Models
 * @version May 26, 2017, 3:44 am UTC
 */
class Archivosbalancesfinancieros extends Model
{
    use SoftDeletes;

    public $table = 'archivosbalancesfinancieros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'idbalancesfinancieros'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'archivo' => 'string',
        'titulo' => 'string',
        'descripcion' => 'string',
        'idbalancesfinancieros' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'archivo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function balancesfinancieros()
    {
        return $this->belongsTo(\App\Models\balancesfinancieros::class, 'idbalancesfinancieros', 'id');
    }
}
