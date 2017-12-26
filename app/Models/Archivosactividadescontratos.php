<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Archivosactividadescontratos
 * @package App\Models
 * @version May 26, 2017, 3:27 am UTC
 */
class Archivosactividadescontratos extends Model
{
    use SoftDeletes;

    public $table = 'archivosactividadescontratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'idactividadescontratos'
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
        'idactividadescontratos' => 'integer'
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
    public function actividadescontratos()
    {
        return $this->belongsTo(\App\Models\actividadescontratos::class, 'idactividadescontratos', 'id');
    }
}
