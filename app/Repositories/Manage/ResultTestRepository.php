<?php

namespace App\Repositories\Manage;

use App\Models\Manage\ResultTest;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ResultTestRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @method ResultTest findWithoutFail($id, $columns = ['*'])
 * @method ResultTest find($id, $columns = ['*'])
 * @method ResultTest first($columns = ['*'])
*/
class ResultTestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_exam',
        'id_user',
        'time_start',
        'time_to_do',
        'time_remaining',
        'point'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ResultTest::class;
    }
}
