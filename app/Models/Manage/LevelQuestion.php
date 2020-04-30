<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class LevelQuestion
 * @package App\Models\Manage
 * @version April 29, 2020, 4:38 pm +07
 *
 * @property \Illuminate\Database\Eloquent\Collection examDetails
 * @property \Illuminate\Database\Eloquent\Collection questions
 * @property string name
 */
class LevelQuestion extends Model
{

    public $table = 'level_question';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function examDetails()
    {
        return $this->hasMany(\App\Models\Manage\ExamDetail::class, 'id_level_question');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function questions()
    {
        return $this->hasMany(\App\Models\Manage\Question::class, 'id_level_question');
    }
}
