<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Quiz
 * @package App\Models
 * @version August 31, 2020, 6:21 am UTC
 *
 * @property integer $user_id
 * @property integer $role_id
 * @property string $code
 * @property string $result
 * @property tinyInteger $status
 * @property integer $priority
 */
class Quiz extends Model
{
    use SoftDeletes;

    public $table = 'quizzes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'role_id',
        'code',
        'result',
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
        'user_id' => 'integer',
        'role_id' => 'integer',
        'code' => 'string',
        'priority' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'result' => 'required'
    ];

    
}
