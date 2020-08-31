<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 * @package App\Models
 * @version August 31, 2020, 3:54 am UTC
 *
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $birthday
 * @property string $image
 * @property string $phone
 * @property number $province_id
 * @property string $address
 * @property string $text
 */
class User extends Authenticatable
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'username',
        'password',
        'birthday',
        'image',
        'phone',
        'province_id',
        'address',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'username' => 'string',
        'password' => 'string',
        'birthday' => 'date',
        'image' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
