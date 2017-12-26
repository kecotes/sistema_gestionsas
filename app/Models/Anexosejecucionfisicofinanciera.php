<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Anexosejecucionfisicofinanciera
 * @package App\Models
 * @version May 26, 2017, 4:26 am UTC
 */
class Anexosejecucionfisicofinanciera extends Model
{
    use SoftDeletes;

    public $table = 'anexosejecucionfisicofinancieras';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'administracion',
        'administracionporcentaje',
        'imprevisto',
        'imprevistoporcentaje',
        'iddatosejecucion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'administracion' => 'double',
        'administracionporcentaje' => 'double',
        'imprevisto' => 'double',
        'imprevistoporcentaje' => 'double',
        'iddatosejecucion' => 'integer'
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
    public function datosejecucionfisicofinanciera()
    {
        return $this->belongsTo(\App\Models\datosejecucionfisicofinanciera::class, 'iddatosejecucion', 'id');
    }
}
