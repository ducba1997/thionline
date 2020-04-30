<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class ExamDetail
 * @package App\Models\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @property \App\Models\Manage\Exam idExam
 * @property \App\Models\Manage\LevelQuestion idLevelQuestion
 * @property integer id_exam
 * @property integer id_level_question
 * @property integer count
 * @property number percent
 */
class ExamDetail extends Model
{

    public $table = 'exam_detail';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_exam',
        'id_level_question',
        'count',
        'percent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_exam' => 'integer',
        'id_level_question' => 'integer',
        'count' => 'integer',
        'percent' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_exam' => 'required',
        'id_level_question' => 'required',
        'count' => 'required',
        'percent' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idExam()
    {
        return $this->belongsTo(\App\Models\Manage\Exam::class, 'id_exam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idLevelQuestion()
    {
        return $this->belongsTo(\App\Models\Manage\LevelQuestion::class, 'id_level_question');
    }
}
