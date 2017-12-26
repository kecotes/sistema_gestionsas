<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Actividadescontratos
 * @package App\Models
 * @version May 26, 2017, 3:25 am UTC
 */
class Actividadescontratos extends Model
{
    use SoftDeletes;

    public $table = 'actividadescontratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'contenido',
        'estado',
        'idcontratos',
        'idtipoactividades'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'contenido' => 'string',
        'estado' => 'string',
        'idcontratos' => 'integer',
        'idtipoactividades' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivosactividadescontratos()
    {
        return $this->hasMany(\App\Models\archivosactividadescontratos::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function contratos()
    {
        return $this->belongsTo(\App\Models\contratos::class, 'idcontratos', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoactividades()
    {
        return $this->belongsTo(\App\Models\tipoactividades::class, 'idtipoactividades', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoactividads()
    {
        return $this->belongsToMany(\App\Models\tipoactividad::class, 'contratos_tipoactividades', 'idcontratos', 'idtipoactividades');
    }
}
