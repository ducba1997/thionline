<?php

namespace App\Http\Controllers;

use App\Model\Exam;
use App\Model\ExamDetail;
use App\Model\Question;
use App\Model\ResultTest;
use App\Model\ResultTestDetail;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index($slug, $id)
    {
        $data_exam = Exam::where('slug', $slug)->where('id', $id);
        if (count($data_exam->get()) == 0||$data_exam->first()->status==0)
            return abort('404');
        $id_user = Auth::id();
        $data_check_result_test = ResultTest::whereNull('point')->where('id_user', $id_user);
        if (count($data_check_result_test->get())) {
            if($data_exam->first()->id != $data_check_result_test->first()->id_exam)
                return redirect('/'); 
            $data_result_test_detail=ResultTestDetail::where('id_result_test',$data_check_result_test->first()->id)->get();
            //return view('welcome',['vara'=>$data_result_test_detail]);
            $count_answered=count(ResultTestDetail::where('id_result_test', $data_check_result_test->first()->id)->whereNotNull('answer')->get());
            return view('frontend.resumeexam', ['data_exam' => $data_exam->first()->toArray(), 'data_question' => $data_result_test_detail,'time'=>$data_check_result_test->first()->time_remaining,'count_answered'=>$count_answered]);
        }

        $data_add_result_test = new ResultTest;
        $data_add_result_test->id_user = $id_user;
        $data_add_result_test->id_exam = $id;
        $data_add_result_test->time_start = now()->toDateTimeString("Y-m-d H:i:s");
        $data_add_result_test->time_remaining=$data_exam->first()->time_to_do;
        $data_add_result_test->save();
        $idresulttest=$data_add_result_test->id;

        $data_exam_detail = ExamDetail::where('id_exam', $id)->get();
        $data_question = [];
        foreach ($data_exam_detail as $value) {
            $data_question = array_merge($data_question, Question::inRandomOrder()->where('id_level_question', $value->id_level_question)->take($value->count)->get()->toArray());
        }
        shuffle($data_question);
        foreach($data_question as $value){
            $data_result_test_detail= new ResultTestDetail;
            $data_result_test_detail->id_result_test=$idresulttest;
            $data_result_test_detail->id_question=$value['id'];
            $data_result_test_detail->save();
        }
        //return view('welcome',['data_question'=>$data_question]);
        return view('frontend.exam', ['data_exam' => $data_exam->first()->toArray(), 'data_question' => $data_question]);
    }

    public function deleteExam(){
        $id_user = Auth::id();
        $data_result_test=ResultTest::where('id_user',$id_user)->whereNull('point');
        ResultTestDetail::where('id_result_test',$data_result_test->first()->id)->delete();
        $data_result_test->delete();
        return redirect('/');
    }

    public function saveAnswer(Request $request)
    {
        $id_user = Auth::id();
        $data_check_result_test = ResultTest::whereNull('point')->where('id_user', $id_user);
        if (count($data_check_result_test->get()) == 0)
            return "";
        $data_check_result_test->update(['time_remaining'=>$request->time_remaining]);
        $data_check_result_test_detail = ResultTestDetail::where('id_question', $request->question)->where('id_result_test', $data_check_result_test->first()->id);
        if (count($data_check_result_test_detail->get())) {
            $data_result_test_detail = $data_check_result_test_detail->first();
            $data_result_test_detail->id_result_test = $data_check_result_test->first()->id;
            $data_result_test_detail->id_question = $request->question;
            $data_result_test_detail->answer = $request->answer;
        }
        //return view('welcome',['vara'=>ResultTestDetail::where('id_question',$question)->first()->toArray()]);
        ResultTestDetail::where('id_question', $request->question)->where('id_result_test', $data_check_result_test->first()->id)->update($data_result_test_detail->toArray());
        return count(ResultTestDetail::where('id_result_test', $data_check_result_test->first()->id)->whereNotNull('answer')->get());
    }

    public function calculatePoint(Request $request){
        $id_user = Auth::id();
        $data_check_result_test = ResultTest::whereNull('point')->where('id_user', $id_user);
        $id_data_check_result_test=$data_check_result_test->first()->id;
        if (count($data_check_result_test->get()) == 0)
            return redirect('/');
        $corect_answer=DB::table('result_test')
                                        ->join('result_test_detail','result_test_detail.id_result_test','=','result_test.id')
                                        ->join('question','question.id','=','result_test_detail.id_question')    
                                        ->join('exam','result_test.id_exam','=','exam.id')
                                        ->join('exam_detail','exam_detail.id_exam','=','exam.id')
                                        ->whereColumn('question.correct_answer','=','result_test_detail.answer')
                                        ->whereColumn('question.id_level_question','=','exam_detail.id_level_question')
                                        ->where('result_test.id','=',$data_check_result_test->first()->id)
                                        ->get();
        $total_point = 0;
        foreach($corect_answer as $value){
            $point_per_answer=(double) $value->percent/$value->count/10;
            $total_point+=$point_per_answer;
        }
        $total_point=round($total_point,2);
        $data_exam=Exam::where('id',$data_check_result_test->first()->id_exam)->first();
        $time_done=$data_exam->time_to_do-$data_check_result_test->first()->time_remaining;
        $data_check_result_test->update(['time_to_do'=>$time_done]);
        $data_check_result_test->update(['point'=>$total_point]);
        return redirect()->route('exam.result',['id'=>$id_data_check_result_test]);
    }

    public function resultExam($id){
        $id_user = Auth::id();
        $data_check_result_test = ResultTest::wherenotNull('point')->where('id_user', $id_user)->where('id',$id);
        if(count($data_check_result_test->get())==0)
            return abort('404');
        $data_exam=$data_check_result_test->first()->exam;
        $count_question=DB::table("exam_detail")->where('id_exam','=',$data_exam->id)->get()->sum("count");
        $corect_answer=DB::table('result_test')
                                        ->join('result_test_detail','result_test_detail.id_result_test','=','result_test.id')
                                        ->join('question','question.id','=','result_test_detail.id_question')    
                                        ->join('exam','result_test.id_exam','=','exam.id')
                                        ->join('exam_detail','exam_detail.id_exam','=','exam.id')
                                        ->whereColumn('question.correct_answer','=','result_test_detail.answer')
                                        ->whereColumn('question.id_level_question','=','exam_detail.id_level_question')
                                        ->where('result_test.id','=',$data_check_result_test->first()->id)
                                        ->get();
        $count_correct_answered=count($corect_answer);
        return view('frontend.resultexam',['data_result_test'=>$data_check_result_test->first(),'data_exam'=>$data_exam,'count_question'=>$count_question,'count_correct_answered'=>$count_correct_answered]);
    }

    public function reviewExam($id){
        $id_user = Auth::id();
        $data_check_result_test=ResultTest::where('id',$id)->where('id_user',$id_user)->whereNotNull('point');
        if(count($data_check_result_test->get())==0)
            return redirect('/');
        $data_exam=$data_check_result_test->first()->exam;
        if($data_exam->allow_review_answer==0)
            return abort('404');
        $data_result_test_detail=ResultTestDetail::where('id_result_test',$data_check_result_test->first()->id)->get();
        $corect_answer=DB::table('result_test')
                                        ->join('result_test_detail','result_test_detail.id_result_test','=','result_test.id')
                                        ->join('question','question.id','=','result_test_detail.id_question')    
                                        ->join('exam','result_test.id_exam','=','exam.id')
                                        ->join('exam_detail','exam_detail.id_exam','=','exam.id')
                                        ->whereColumn('question.correct_answer','=','result_test_detail.answer')
                                        ->whereColumn('question.id_level_question','=','exam_detail.id_level_question')
                                        ->where('result_test.id','=',$data_check_result_test->first()->id)
                                        ->get();
        return view('frontend.review',['count_correct_answered'=>count($corect_answer),'data_result_test'=>$data_check_result_test->first(),'data_result_test_detail'=>$data_result_test_detail]);
    }
}
