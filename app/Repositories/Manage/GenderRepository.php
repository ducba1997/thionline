<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Gender;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GenderRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:18 pm +07
 *
 * @method Gender findWithoutFail($id, $columns = ['*'])
 * @method Gender find($id, $columns = ['*'])
 * @method Gender first($columns = ['*'])
*/
class GenderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gender::class;
    }
}
