<?php

namespace App\Repositories;

use App\Models\Adicciones;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdiccionesRepository
 * @package App\Repositories
 * @version February 8, 2018, 3:07 am UTC
 *
 * @method Adicciones findWithoutFail($id, $columns = ['*'])
 * @method Adicciones find($id, $columns = ['*'])
 * @method Adicciones first($columns = ['*'])
*/
class AdiccionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Adicciones::class;
    }
}
