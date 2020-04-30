<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="lesson";

    public function subject()
    {
    	return $this->belongsto('App\Model\Subject','id_subject');
    }

    public function chapter()
    {
    	return $this->belongsto('App\Model\Chapter','id_chapter');
    }

    public function grade()
    {
    	return $this->belongsto('App\Model\Grade','id_grade');
    }

}
