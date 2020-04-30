<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Permission
 * @package App\Models\Manage
 * @version April 29, 2020, 4:36 pm +07
 *
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string name
 */
class Permission extends Model
{

    public $table = 'permission';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\Manage\User::class, 'id_permission');
    }
}
