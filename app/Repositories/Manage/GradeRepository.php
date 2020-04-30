<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Grade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GradeRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:36 pm +07
 *
 * @method Grade findWithoutFail($id, $columns = ['*'])
 * @method Grade find($id, $columns = ['*'])
 * @method Grade first($columns = ['*'])
*/
class GradeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Grade::class;
    }
}
