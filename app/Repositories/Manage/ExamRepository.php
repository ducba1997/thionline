<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Exam;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExamRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @method Exam findWithoutFail($id, $columns = ['*'])
 * @method Exam find($id, $columns = ['*'])
 * @method Exam first($columns = ['*'])
*/
class ExamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_grade',
        'id_subject',
        'id_chapter',
        'id_users',
        'name',
        'slug',
        'description',
        'password',
        'time_to_do',
        'allow_review_answer',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Exam::class;
    }
}
