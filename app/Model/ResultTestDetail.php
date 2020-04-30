<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResultTestDetail extends Model
{
    protected $table="result_test_detail";
    protected $fillable = ['id'];

    public function question()
    {
    	return $this->belongsto('App\Model\Question','id_question');
    }
}
