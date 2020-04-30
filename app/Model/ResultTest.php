<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResultTest extends Model
{
    protected $table="result_test";

    public function exam()
    {
    	return $this->belongsto('App\Model\Exam','id_exam');
    }
}
