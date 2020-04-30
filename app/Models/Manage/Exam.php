<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Exam
 * @package App\Models\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @property \App\Models\Manage\Chapter idChapter
 * @property \App\Models\Manage\Grade idGrade
 * @property \App\Models\Manage\Subject idSubject
 * @property \App\Models\Manage\User idUsers
 * @property \Illuminate\Database\Eloquent\Collection examDetails
 * @property \Illuminate\Database\Eloquent\Collection questions
 * @property \Illuminate\Database\Eloquent\Collection resultTests
 * @property integer id_grade
 * @property integer id_subject
 * @property integer id_chapter
 * @property integer id_users
 * @property string name
 * @property string slug
 * @property string description
 * @property string password
 * @property integer time_to_do
 * @property boolean allow_review_answer
 * @property boolean status
 */
class Exam extends Model
{

    public $table = 'exam';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_grade' => 'integer',
        'id_subject' => 'integer',
        'id_chapter' => 'integer',
        'id_users' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'password' => 'string',
        'time_to_do' => 'integer',
        'allow_review_answer' => 'boolean',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_grade' => 'required',
        'id_subject' => 'required',
        'id_chapter' => 'required',
        'id_users' => 'required',
        'name' => 'required',
        'slug' => 'required',
        'time_to_do' => 'required',
        'allow_review_answer' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idChapter()
    {
        return $this->belongsTo(\App\Models\Manage\Chapter::class, 'id_chapter');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idGrade()
    {
        return $this->belongsTo(\App\Models\Manage\Grade::class, 'id_grade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idSubject()
    {
        return $this->belongsTo(\App\Models\Manage\Subject::class, 'id_subject');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idUsers()
    {
        return $this->belongsTo(\App\Models\Manage\User::class, 'id_users');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function examDetails()
    {
        return $this->hasMany(\App\Models\Manage\ExamDetail::class, 'id_exam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function questions()
    {
        return $this->hasMany(\App\Models\Manage\Question::class, 'id_exam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function resultTests()
    {
        return $this->hasMany(\App\Models\Manage\ResultTest::class, 'id_exam');
    }
}
