<?php

namespace App\Repositories\Manage;

use App\Models\Manage\ExamDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExamDetailRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @method ExamDetail findWithoutFail($id, $columns = ['*'])
 * @method ExamDetail find($id, $columns = ['*'])
 * @method ExamDetail first($columns = ['*'])
*/
class ExamDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_exam',
        'id_level_question',
        'count',
        'percent'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ExamDetail::class;
    }
}
