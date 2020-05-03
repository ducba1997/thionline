<?php

namespace App\Http\Controllers;

use App\Model\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Model\Grade;
use App\Model\Subject;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    public function index($slug,$id){
        $data_lesson=Lesson::where('slug',$slug)->where('id',$id);
        if(count($data_lesson->get()))
            return view('frontend.lesson',['data_lesson'=>$data_lesson->first()]);
        return abort('404');
    }

    public function showFullLesson($grade=null,$subject=null){
        if(!$grade){
            $grade='lop-6';
        }
        $data_grade=Grade::where('slug',$grade)->first();
        if(!$subject){
            $subjectItems=DB::table('subject')
            ->select('subject.id as subject_id','subject.name as subject_name','subject.slug as subject_slug')
            ->distinct()
            ->join('lesson','lesson.id_subject','=','subject.id')
            ->join('grade','grade.id','=','lesson.id_grade')
            ->where('lesson.id_grade','=',$data_grade->id)
            ->orderByRaw("RAND()");
            if(count($subjectItems->get())==0)
                return redirect('/');
            $subject=$subjectItems->first()->subject_slug;
        }
        $data_check_grade=Grade::where('slug',$grade);
        if(count($data_check_grade->get())==0)
            return abort('404');
        $data_check_subject=Subject::where('slug',$subject);
        if(count($data_check_subject->get())==0)
            return abort('404');
        $data_chapter=DB::table('chapter')
                                    ->select('chapter.id as chapter_id','chapter.name as chapter_name')
                                    ->distinct()
                                    ->join('lesson','lesson.id_chapter','=','chapter.id')
                                    ->where('lesson.id_grade','=',$data_check_grade->first()->id)
                                    ->where('lesson.id_subject','=',$data_check_subject->first()->id)
                                    ->where('lesson.status','=',1)
                                    ->get();
        return view('frontend.lesson.showlesson',['data_chapter'=>$data_chapter,'data_grade'=>$data_check_grade->first(),'data_subject'=>$data_check_subject->first()]);
    }

    public function showExamFull($grade=null,$subject=null){
        if(!$grade){
            $grade='lop-6';
        }
        $data_grade=Grade::where('slug',$grade)->first();
        if(!$subject){
            $subjectItems=DB::table('subject')
            ->select('subject.id as subject_id','subject.name as subject_name','subject.slug as subject_slug')
            ->distinct()
            ->join('exam','exam.id_subject','=','subject.id')
            ->join('grade','grade.id','=','exam.id_grade')
            ->where('exam.id_grade','=',$data_grade->id)
            ->orderByRaw("RAND()");
            if(count($subjectItems->get())==0)
                return redirect('/');
            $subject=$subjectItems->first()->subject_slug;
        }
        $data_check_grade=Grade::where('slug',$grade);
        if(count($data_check_grade->get())==0)
            return abort('404');
        $data_check_subject=Subject::where('slug',$subject);
        if(count($data_check_subject->get())==0)
            return abort('404');
        return view('frontend.exam.showexam',['data_grade'=>$data_check_grade->first(),'data_subject'=>$data_check_subject->first()]);
    }
}
