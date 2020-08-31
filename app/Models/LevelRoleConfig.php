<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LevelRoleConfig
 * @package App\Models
 * @version August 31, 2020, 6:05 am UTC
 *
 * @property integer $level_id
 * @property integer $role_id
 * @property integer $from_point
 * @property integer $end_point
 * @property tinyInteger $status
 * @property integer $priority
 */
class LevelRoleConfig extends Model
{
    use SoftDeletes;

    public $table = 'level_role_configs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'level_id',
        'role_id',
        'from_point',
        'end_point',
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
        'level_id' => 'integer',
        'role_id' => 'integer',
        'from_point' => 'integer',
        'end_point' => 'integer',
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
