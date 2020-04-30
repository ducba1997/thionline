<?php

namespace App\Repositories\Manage;

use App\Models\Manage\ResultTestDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ResultTestDetailRepository
 * @package App\Repositories\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @method ResultTestDetail findWithoutFail($id, $columns = ['*'])
 * @method ResultTestDetail find($id, $columns = ['*'])
 * @method ResultTestDetail first($columns = ['*'])
*/
class ResultTestDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_result_test',
        'id_question',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ResultTestDetail::class;
    }
}
