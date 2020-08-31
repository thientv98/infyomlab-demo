<?php

namespace App\Repositories;

use App\Models\LevelRoleConfig;
use App\Repositories\BaseRepository;

/**
 * Class LevelRoleConfigRepository
 * @package App\Repositories
 * @version August 31, 2020, 6:05 am UTC
*/

class LevelRoleConfigRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level_id',
        'role_id',
        'from_point',
        'end_point',
        'status',
        'priority'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LevelRoleConfig::class;
    }
}
