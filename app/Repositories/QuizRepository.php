<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Repositories\BaseRepository;

/**
 * Class QuizRepository
 * @package App\Repositories
 * @version August 31, 2020, 6:21 am UTC
*/

class QuizRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'role_id',
        'code',
        'result',
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
        return Quiz::class;
    }
}
