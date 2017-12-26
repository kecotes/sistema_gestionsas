<?php

namespace App\Repositories;

use App\Models\Balancesfinancieros;
use InfyOm\Generator\Common\BaseRepository;

class BalancesfinancierosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Balancesfinancieros::class;
    }
}
