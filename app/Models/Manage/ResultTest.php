<?php

namespace App\Models\Manage;

use Eloquent as Model;

/**
 * Class ResultTest
 * @package App\Models\Manage
 * @version April 29, 2020, 4:39 pm +07
 *
 * @property \App\Models\Manage\Exam idExam
 * @property \App\Models\Manage\User idUser
 * @property \Illuminate\Database\Eloquent\Collection resultTestDetails
 * @property integer id_exam
 * @property integer id_user
 * @property string|\Carbon\Carbon time_start
 * @property integer time_to_do
 * @property integer time_remaining
 * @property number point
 */
class ResultTest extends Model
{

    public $table = 'result_test';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_exam',
        'id_user',
        'time_start',
        'time_to_do',
        'time_remaining',
        'point'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_exam' => 'integer',
        'id_user' => 'integer',
        'time_start' => 'datetime',
        'time_to_do' => 'integer',
        'time_remaining' => 'integer',
        'point' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_exam' => 'required',
        'id_user' => 'required',
        'time_start' => 'required'
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
    public function idUser()
    {
        return $this->belongsTo(\App\Models\Manage\User::class, 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function resultTestDetails()
    {
        return $this->hasMany(\App\Models\Manage\ResultTestDetail::class, 'id_result_test');
    }
}
