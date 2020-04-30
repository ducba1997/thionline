<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Subject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SubjectRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:36 pm +07
 *
 * @method Subject findWithoutFail($id, $columns = ['*'])
 * @method Subject find($id, $columns = ['*'])
 * @method Subject first($columns = ['*'])
*/
class SubjectRepository extends BaseRepository
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
        return Subject::class;
    }
}
