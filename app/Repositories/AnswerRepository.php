<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Repositories\BaseRepository;

/**
 * Class AnswerRepository
 * @package App\Repositories
 * @version August 31, 2020, 4:55 am UTC
*/

class AnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question_id',
        'title',
        'is_correct',
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
        return Answer::class;
    }
}
