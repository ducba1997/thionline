<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class Grade
 * @package App\Models\Manage
 * @version April 29, 2020, 4:36 pm +07
 *
 * @property \Illuminate\Database\Eloquent\Collection exams
 * @property \Illuminate\Database\Eloquent\Collection lessons
 * @property string name
 * @property string slug
 */
class Grade extends Model
{

    public $table = 'grade';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exams()
    {
        return $this->hasMany(\App\Models\Manage\Exam::class, 'id_grade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lessons()
    {
        return $this->hasMany(\App\Models\Manage\Lesson::class, 'id_grade');
    }
}
