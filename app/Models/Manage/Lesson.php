<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Lesson
 * @package App\Models\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @property \App\Models\Manage\Chapter idChapter
 * @property \App\Models\Manage\Grade idGrade
 * @property \App\Models\Manage\Subject idSubject
 * @property string name
 * @property string slug
 * @property integer id_grade
 * @property integer id_subject
 * @property integer id_chapter
 * @property string image
 * @property string content
 * @property string assignment
 * @property boolean status
 */
class Lesson extends Model
{

    public $table = 'lesson';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'slug',
        'id_grade',
        'id_subject',
        'id_chapter',
        'id_users',
        'image',
        'content',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'id_grade' => 'integer',
        'id_subject' => 'integer',
        'id_chapter' => 'integer',
        'id_users' => 'integer',
        'image' => 'string',
        'content' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required',
        'id_grade' => 'required',
        'id_subject' => 'required',
        'id_chapter' => 'required',
        'content' => 'required',
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
}
