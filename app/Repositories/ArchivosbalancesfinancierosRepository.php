<?php

namespace App\Repositories;

use App\Models\Archivosbalancesfinancieros;
use InfyOm\Generator\Common\BaseRepository;

class ArchivosbalancesfinancierosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'archivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Archivosbalancesfinancieros::class;
    }
}
