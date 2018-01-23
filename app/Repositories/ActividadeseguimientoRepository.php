<?php

namespace App\Repositories;

use App\Models\Actividadeseguimiento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActividadeseguimientoRepository
 * @package App\Repositories
 * @version January 23, 2018, 9:45 pm UTC
 *
 * @method Actividadeseguimiento findWithoutFail($id, $columns = ['*'])
 * @method Actividadeseguimiento find($id, $columns = ['*'])
 * @method Actividadeseguimiento first($columns = ['*'])
*/
class ActividadeseguimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreinforme'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Actividadeseguimiento::class;
    }
}
