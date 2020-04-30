<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class ResultTestDetail
 * @package App\Models\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @property \App\Models\Manage\Question idQuestion
 * @property \App\Models\Manage\ResultTest idResultTest
 * @property integer id_result_test
 * @property integer id_question
 * @property string answer
 */
class ResultTestDetail extends Model
{

    public $table = 'result_test_detail';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_result_test',
        'id_question',
        'answer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_result_test' => 'integer',
        'id_question' => 'integer',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_result_test' => 'required',
        'id_question' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idQuestion()
    {
        return $this->belongsTo(\App\Models\Manage\Question::class, 'id_question');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idResultTest()
    {
        return $this->belongsTo(\App\Models\Manage\ResultTest::class, 'id_result_test');
    }
}
