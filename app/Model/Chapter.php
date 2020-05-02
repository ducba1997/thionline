<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table="chapter";

    public function lessons()
    {
        return $this->hasMany(\App\Models\Manage\Lesson::class, 'id_chapter');
    }
}
