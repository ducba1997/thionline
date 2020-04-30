<?php

namespace App\Repositories\Manage;

use App\Models\Manage\LevelQuestion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LevelQuestionRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @method LevelQuestion findWithoutFail($id, $columns = ['*'])
 * @method LevelQuestion find($id, $columns = ['*'])
 * @method LevelQuestion first($columns = ['*'])
*/
class LevelQuestionRepository extends BaseRepository
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
        return LevelQuestion::class;
    }
}
