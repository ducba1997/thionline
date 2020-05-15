@extends('layouts.home') 
@section('title')
Đề thi và kiểm tra môn {{$data_subject->name}} {{$data_grade->name}}
@endsection
@section('submenu')
{{URL('/de-thi/')}}
@endsection
@section('content')
<?php

$id_user = \Auth::id();
$data_check_result_test = App\Models\Manage\ResultTest::whereNull('point')->where('id_user', $id_user);
$idresume=null;
if(count($data_check_result_test->get()))
    $idresume=$data_check_result_test->first()->idExam->id;
?>
<section class="main">
    <article class="box-cate search-filter left-collapse">
        <div class="container">
            <div class="cate-col-left">
                <div class="box-scroll-left">
                    <div class="scroll-left " id="scroll-left">
                        <h2 class="cate-title">

                            Đề thi & kiểm tra
                            {{$data_grade->name}}</h2>

                        <ul class="list-cate">
                            <?php $subjectItems = DB::table('subject')
                                ->select('subject.id as subject_id', 'subject.name as subject_name', 'subject.slug as subject_slug')
                                ->distinct()
                                ->join('exam', 'exam.id_subject', '=', 'subject.id')
                                ->join('grade', 'grade.id', '=', 'exam.id_grade')
                                ->where('exam.id_grade', '=', $data_grade->id)
                                ->get();
                            ?>
                            @foreach($subjectItems as $value)
                            <li class="{{ Request::is('de-thi/'.$data_grade->slug.'/'.$value->subject_slug.'*') ? 'act' : '' }}">
                                <a href="{{route('exam.full',['grade'=>$data_grade->slug,'subject'=>$value->subject_slug])}}">
                                    {{$value->subject_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cate-col-right padleft20">
            <?php $examItems = DB::table('exam')
                                    ->select('exam.id as exam_id', 'exam.name as exam_name', 'exam.slug as exam_slug','exam.description as exam_description','exam.time_to_do','exam.updated_at as exam_time')
                                    ->join('subject', 'exam.id_subject', '=', 'subject.id')
                                    ->where('exam.id_grade', '=', $data_grade->id)
                                    ->where('exam.id_subject', '=', $data_subject->id)
                                    ->where('exam.status', '=', 1)
                                    ->paginate(1); 
            ?>

                <ul class="list-content-chuong list-content-cauhoi">
                    @foreach($examItems as $value)
                    <li class="item-cauhoi">
                        <div class="i-img">
                            <span class="css-img2">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="i-head">
                            <a href="{{route('exam.preview',['id'=>$value->exam_id])}}">
                                <h3 class="i-title">
                                    <span class="h3i">{{$value->exam_name}}</span>
                                </h3>
                            </a>
                        </div>
                        <div class="i-content">
                            {{$value->exam_description}}
                        </div>
                        <div class="i-bot">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 marginbot10">
                                    <i class="far fa-file-alt marright5"></i> <?php $countquestion=App\Model\ExamDetail::where('id_exam',$value->exam_id)->sum('count'); ?>
                                    {{$countquestion}} câu
                                </div>
                                <div class="col-md-3 col-xs-6 marginbot10">
                                    <i class="far fa-edit marright5"></i> Thời gian: {{gmdate("i", $value->time_to_do)." p "}} 
                                    @if($value->time_to_do%60!=0)
                                        {{ gmdate("s", $value->time_to_do)." s"}}
                                    @endif
                                </div>
                                <div class="col-md-3 col-xs-6 marginbot10">
                                    <i class="far fa-calendar-alt marright5"></i> {{\Carbon\Carbon::parse($value->exam_time)->format('d/m/Y')}} </div>
                                <div class="col-md-3 col-xs-6 marginbot10">
                                    @if($idresume)
                                        @if($idresume==$value->exam_id)
                                            <a href="{{route('exam.index',['slug'=>$value->exam_slug,'id'=>$value->exam_id])}}"><button class="btn btn_orange_sm posrelative0"><i class="fa fa-check-circle"></i> Tiếp tục thi</button></a>
                                        @else 
                                            <a href="{{route('exam.preview',['id'=>$value->exam_id])}}"><button class="btn btn_orange_sm posrelative0"><i class="fa fa-check-circle"></i> Bắt đầu thi</button></a>
                                        @endif
                                    @else
                                        <a href="{{route('exam.preview',['id'=>$value->exam_id])}}"><button class="btn btn_orange_sm posrelative0"><i class="fa fa-check-circle"></i> Bắt đầu thi</button></a>
                                    
                                    @endif
                                    </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                {{$examItems->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>

        </div>
    </article>
</section>
@endsection