<?php

namespace App\Http\Controllers;

use App\Models\Manage\Assignment;
use Illuminate\Http\Request;
use App\Model\Grade;
use App\Model\Subject;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    public function index($slug,$id){
        $data_assignment=Assignment::where('slug',$slug)->where('id',$id);
        if(count($data_assignment->get()))
            return view('frontend.assignment.assignment',['data_assignment'=>$data_assignment->first()]);
        return abort('404');
    }

    public function showAssignmentFull($grade=null,$subject=null){
        if(!$grade||!$subject){
            if(!$grade){
                $grade='lop-6';
            }
            $data_grade=Grade::where('slug',$grade)->first();
            if(!$subject){
                $subjectItems=DB::table('subject')
                ->select('subject.id as subject_id','subject.name as subject_name','subject.slug as subject_slug')
                ->distinct()
                ->join('assignment','assignment.id_subject','=','subject.id')
                ->join('grade','grade.id','=','assignment.id_grade')
                ->where('assignment.id_grade','=',$data_grade->id)
                ->inRandomOrder();
                if(count($subjectItems->get())==0)
                    return redirect('/');
                $subject=$subjectItems->first()->subject_slug;
            }
            return redirect()->route('assignment.full',['grade'=>$grade,'subject'=>$subject]);
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
                                    ->join('assignment','assignment.id_chapter','=','chapter.id')
                                    ->where('assignment.id_grade','=',$data_check_grade->first()->id)
                                    ->where('assignment.id_subject','=',$data_check_subject->first()->id)
                                    ->where('assignment.status','=',1)
                                    ->get();
        return view('frontend.assignment.assignmentfull',['data_chapter'=>$data_chapter,'data_grade'=>$data_check_grade->first(),'data_subject'=>$data_check_subject->first()]);
    }
    public function download($id){
        $file=Assignment::find($id);
        $path=public_path()."/upload/files/".$file->url;
        return response()->download($path);
    }

    public function viewonline($id){
        $file=Assignment::find($id);
        $path=public_path()."/upload/files/".$file->url;
        return response()->file($path);
    }
}
