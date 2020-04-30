<?php

namespace App\Http\Controllers;

use App\Model\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers;

class LessonController extends Controller
{
    public function index($slug,$id){
        $data_lesson=Lesson::where('slug',$slug)->where('id',$id);
        if(count($data_lesson->get()))
            return view('frontend.lesson',['data_lesson'=>$data_lesson->first()]);
        return abort('404');
    }
}
