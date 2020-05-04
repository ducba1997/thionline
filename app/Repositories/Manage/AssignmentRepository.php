<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Assignment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AssignmentRepository
 * @package App\Repositories\Manage
 * @version May 4, 2020, 5:19 pm +07
 *
 * @method Assignment findWithoutFail($id, $columns = ['*'])
 * @method Assignment find($id, $columns = ['*'])
 * @method Assignment first($columns = ['*'])
*/
class AssignmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'id_grade',
        'id_subject',
        'id_chapter',
        'url',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Assignment::class;
    }
}
