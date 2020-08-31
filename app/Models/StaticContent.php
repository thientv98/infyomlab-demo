<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StaticContent
 * @package App\Models
 * @version August 31, 2020, 4:37 am UTC
 *
 * @property string $key
 * @property string $title
 * @property string $content
 * @property tinyInteger $status
 * @property integer $priority
 */
class StaticContent extends Model
{
    use SoftDeletes;

    public $table = 'static_contents';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'key',
        'title',
        'content',
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
        'key' => 'string',
        'title' => 'string',
        'content' => 'string',
        'priority' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

    
}
