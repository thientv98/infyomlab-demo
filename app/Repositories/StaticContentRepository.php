<?php

namespace App\Repositories;

use App\Models\StaticContent;
use App\Repositories\BaseRepository;

/**
 * Class StaticContentRepository
 * @package App\Repositories
 * @version August 31, 2020, 4:37 am UTC
*/

class StaticContentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'title',
        'content',
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
        return StaticContent::class;
    }
}
