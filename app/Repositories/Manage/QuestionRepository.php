<?php

namespace App\Repositories\Manage;

use App\Models\Manage\Question;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QuestionRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @method Question findWithoutFail($id, $columns = ['*'])
 * @method Question find($id, $columns = ['*'])
 * @method Question first($columns = ['*'])
*/
class QuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_exam',
        'id_level_question',
        'content',
        'correct_answer',
        'answer_1',
        'answer_2',
        'answer_3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Question::class;
    }
}
