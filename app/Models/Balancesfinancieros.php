<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Balancesfinancieros
 * @package App\Models
 * @version May 26, 2017, 3:41 am UTC
 */
class Balancesfinancieros extends Model
{
    use SoftDeletes;

    public $table = 'balancesfinancieros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'actaparcial',
        'pendientepagar',
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
        'estado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function archivosbalancesfinancieros()
    {
        return $this->hasMany(\App\Models\archivosbalancesfinancieros::class);
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
