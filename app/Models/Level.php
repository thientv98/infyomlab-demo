<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * Class Level
 * @package App\Models
 * @version August 31, 2020, 4:25 am UTC
 *
 * @property string $title
 * @property string $thumbnail
 * @property string $content
 * @property tinyint $status
 * @property integer $priority
 */
class Level extends Model
{
    use SoftDeletes;

    public $table = 'levels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'thumbnail',
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
        'title' => 'string',
        'thumbnail' => 'string',
        'content' => 'string',
        'priority' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function setThumbnailAttribute($value)
    {
        if($value){
            $url = Storage::disk('public')->put('levels', $value);
            $this->attributes['thumbnail'] = $url;
        }
    }
}
