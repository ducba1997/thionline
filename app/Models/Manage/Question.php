<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Question
 * @package App\Models\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @property \App\Models\Manage\Exam idExam
 * @property \App\Models\Manage\LevelQuestion idLevelQuestion
 * @property \Illuminate\Database\Eloquent\Collection resultTestDetails
 * @property integer id_exam
 * @property integer id_level_question
 * @property string content
 * @property string correct_answer
 * @property string answer_1
 * @property string answer_2
 * @property string answer_3
 */
class Question extends Model
{

    public $table = 'question';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_exam',
        'id_level_question',
        'content',
        'correct_answer',
        'answer_1',
        'answer_2',
        'answer_3'
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
        'content' => 'string',
        'correct_answer' => 'string',
        'answer_1' => 'string',
        'answer_2' => 'string',
        'answer_3' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_exam' => 'required',
        'id_level_question' => 'required',
        'content' => 'required',
        'correct_answer' => 'required'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function resultTestDetails()
    {
        return $this->hasMany(\App\Models\Manage\ResultTestDetail::class, 'id_question');
    }
}
