<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Assignment
 * @package App\Models\Manage
 * @version May 4, 2020, 5:19 pm +07
 *
 * @property \App\Models\Manage\Chapter idChapter
 * @property \App\Models\Manage\Grade idGrade
 * @property \App\Models\Manage\Subject idSubject
 * @property string name
 * @property string slug
 * @property string description
 * @property integer id_grade
 * @property integer id_subject
 * @property integer id_chapter
 * @property string url
 * @property boolean status
 */
class Assignment extends Model
{

    public $table = 'assignment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'slug',
        'description',
        'id_grade',
        'id_subject',
        'id_chapter',
        'url',
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
        'description' => 'string',
        'id_grade' => 'integer',
        'id_subject' => 'integer',
        'id_chapter' => 'integer',
        'url' => 'string',
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
        'description' => 'required',
        'id_grade' => 'required',
        'id_subject' => 'required',
        'id_chapter' => 'required',
        'url' => 'max:10000|mimes:doc,docx,pdf,zip,rar,txt',
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
