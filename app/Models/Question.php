<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * @package App\Models
 * @version August 31, 2020, 4:46 am UTC
 *
 * @property integer $role_id
 * @property string $title
 * @property tinyInteger $status
 * @property integer $priority
 */
class Question extends Model
{
    use SoftDeletes;

    public $table = 'questions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'role_id',
        'title',
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
        'role_id' => 'integer',
        'title' => 'string',
        'priority' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
