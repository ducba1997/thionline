<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Users;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsersRepository
 * @package App\Repositories\Manage
 * @version April 30, 2020, 9:49 am +07
 *
 * @method Users findWithoutFail($id, $columns = ['*'])
 * @method Users find($id, $columns = ['*'])
 * @method Users first($columns = ['*'])
*/
class UsersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Users::class;
    }
}
