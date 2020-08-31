<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * Class Role
 * @package App\Models
 * @version August 31, 2020, 4:32 am UTC
 *
 * @property string $title
 * @property string $background_image
 * @property tinyInteger $status
 * @property integer $priority
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'background_image',
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
        'title' => 'string',
        'background_image' => 'string',
        'priority' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'background_image' => 'required'
    ];

    public function setBackgroundImageAttribute($value)
    {
        if($value){
            $url = Storage::disk('public')->put('role', $value);
            $this->attributes['background_image'] = $url;
        }
    }
    
}
