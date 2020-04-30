<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Lesson;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LessonRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @method Lesson findWithoutFail($id, $columns = ['*'])
 * @method Lesson find($id, $columns = ['*'])
 * @method Lesson first($columns = ['*'])
*/
class LessonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'id_grade',
        'id_subject',
        'id_chapter',
        'image',
        'content',
        'assignment',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lesson::class;
    }
}
