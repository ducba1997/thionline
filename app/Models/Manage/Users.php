<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Users
 * @package App\Models\Manage
 * @version April 30, 2020, 9:49 am +07
 *
 * @property \App\Models\Manage\Gender idGender
 * @property \App\Models\Manage\Permission idPermission
 * @property \Illuminate\Database\Eloquent\Collection exams
 * @property \Illuminate\Database\Eloquent\Collection resultTests
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property integer id_gender
 * @property integer id_permission
 * @property string avatar
 * @property string birthday
 * @property string address
 * @property string password
 * @property string provider_id
 * @property string provider
 * @property boolean active
 * @property string remember_token
 */
class Users extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'id_gender',
        'id_permission',
        'avatar',
        'birthday',
        'address',
        'password',
        'provider_id',
        'provider',
        'active',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'id_gender' => 'integer',
        'id_permission' => 'integer',
        'avatar' => 'string',
        'birthday' => 'date',
        'address' => 'string',
        'password' => 'string',
        'provider_id' => 'string',
        'provider' => 'string',
        'active' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'id_gender' => 'required',
        'id_permission' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idGender()
    {
        return $this->belongsTo(\App\Models\Manage\Gender::class, 'id_gender');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPermission()
    {
        return $this->belongsTo(\App\Models\Manage\Permission::class, 'id_permission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exams()
    {
        return $this->hasMany(\App\Models\Manage\Exam::class, 'id_users');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function resultTests()
    {
        return $this->hasMany(\App\Models\Manage\ResultTest::class, 'id_user');
    }
}
