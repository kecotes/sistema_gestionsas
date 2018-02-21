<?php

namespace App\Repositories;

use App\Models\Correspondencias;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CorrespondenciasRepository
 * @package App\Repositories
 * @version February 20, 2018, 5:26 am UTC
 *
 * @method Correspondencias findWithoutFail($id, $columns = ['*'])
 * @method Correspondencias find($id, $columns = ['*'])
 * @method Correspondencias first($columns = ['*'])
*/
class CorrespondenciasRepository extends BaseRepository
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
        return Correspondencias::class;
    }
}
