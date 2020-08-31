<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Answer
 * @package App\Models
 * @version August 31, 2020, 4:55 am UTC
 *
 * @property integer $question_id
 * @property string $title
 * @property tinyInteger $is_correct
 * @property tinyInteger $status
 * @property tinyInteger $priority
 */
class Answer extends Model
{
    use SoftDeletes;

    public $table = 'answers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'question_id',
        'title',
        'is_correct',
        'status',
        'priority'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question_id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
