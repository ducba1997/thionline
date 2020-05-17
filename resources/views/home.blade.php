@extends('layouts.home')
@section('submenu')
{{URL('/chuong-trinh/')}}
@endsection
@section('title','Cộng đồng ôn tập và luyện thi trực tuyến')
@section('content')
<section class="main">
        <article class="box-index no-head">
            <div class="box-content posrelative">
                <img class="hoavan1" src="upload/hoavan1.png">
                <img class="hoavan2" src="upload/hoavan2.png">
                <div class="container">
                    <div class="col-xs-12 canhgiua ctpt" style="z-index:999;">
                        <h2 class="b-head2">CHƯƠNG TRÌNH PHỔ THÔNG <br>
                            <span class="head2">Đầy đủ bài giảng và bài tập SGK <span class="cred">MIỄN PHÍ</span></span>
                        </h2>
                    </div>
                    <?php $data_grade=App\Model\Grade::all(); ?>
                    <ul class="idxulcl hidden-xs">
                        @foreach($data_grade as $value)
                            <li id="lidata_tieu-hoc"><a href="{{URL('/chuong-trinh')}}/{{$value->slug}}" >{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </article>
        <article class="box-index no-head box-httd">
            <div class="box-content">
                <div class="container">
                    <div class="col-xs-12 canhgiua">
                        <h2 class="b-head2">HỌC TẬP TOÀN DIỆN <br>
                            <span class="head2">Kho đề thi trắc nghiệm Online - Hỏi đáp nhanh chóng - Tư liệu tham khảo</span>
                        </h2>
                    </div>
                    <ul class="ul-httd">
                        <li>
                            <a href="{{URL('/de-thi/')}}">
                                <img src="upload/task.png?id=1">
                                <p class="mau1">1.000+</p>
                                <p>Trắc nghiệm</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/chuong-trinh/')}}" >
                                <img src="upload/business.png?id=1">
                                <p class="mau1">300K+</p>
                                <p>Bài học</p>
                            </a>
                        </li>
                        <li>
                            <a href="" onclick="return false;">
                                <img src="upload/video-player.png?id=1">
                                <p class="mau1">1.000+</p>
                                <p>Video</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/tai-lieu/')}}">
                                <img src="upload/notebook.png?id=1">
                                <p class="mau1">5.000+</p>
                                <p>Tư liệu</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="box-index _no-head">
            <div class="box-content">
                <div class="container">
                    <div class="col-xs12 canhgiua">
                        <h2 class="b-head">Chương trình đầy đủ - Tư liệu phong phú</h2>
                    </div>
                    <div class="row">
                        <div class="boder2col-index">
                            <div class="col-sm-6 col-xs12">
                                <div class="b-head-cate">
                                    <h3 class="i-title">Chương trình học</h3>
                                </div>
                                <div class="fleft w100per">
                                    <div class="row">
                                        <div class="box-inline-block canhgiua">
                                            <div class="col-inline-block vermid col-lg-4 col-md-3 col-sm-3 col-xs-12 padbot10 canhgiua hidden-xs" id="img-lession-index">
                                                <img src="upload/index-cth.png">
                                            </div>
                                            <div class="col-inline-block vermid col-lg-8 col-md-9 col-sm-9 col-xs-12 padbot10">
                                                <div class="b-content">
                                                    <ul class="list-thaoluan-index" id="list-lession-index" style="overflow: hidden; width: 100%; height: 260px;">
                                                    <?php $lessonItems=\App\Models\Manage\Lesson::inRandomOrder()->where('status',1)->limit(8)->get() ?>    
                                                    @foreach($lessonItems as $value)
                                                    <li class="item">
                                                            <a class="i-des" href="{{route('lesson',['slug'=>$value->slug,'id'=>$value->id])}}">{{$value->name}}</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> {{$value->idGrade->name}}</span>
                                                                <span class="i-cate">|&nbsp;&nbsp; {{$value->idSubject->name}}&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                    <script>
                                                        jQuery(function($){
													var hSideTop	= jQuery("#img-lession-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-lession-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs12">
                                <div class="b-head-cate green">
                                    <h3 class="i-title">Tư liệu học tập</h3>
                                </div>
                                <div class="fleft w100per">
                                    <div class="row">
                                        <div class="box-inline-block canhgiua">
                                            <div class="col-inline-block vermid col-lg-4 col-md-3 col-sm-3 col-xs-12 canhgiua hidden-xs" id="img-faq-index">
                                                <img src="upload/index-baitap.png">
                                            </div>
                                            <div class="col-inline-block vermid col-lg-8 col-md-9 col-sm-9 col-xs-12 padbot10">
                                                <div class="b-content">
                                                    <ul class="list-thaoluan-index" id="list-faq-index" style="overflow: hidden; width: 100%; height: 260px;">
                                                    <?php $assignmentItems=\App\Models\Manage\Assignment::inRandomOrder()->where('status',1)->limit(8)->get() ?>
                                                    @foreach($assignmentItems as $value)
                                                    <li class="item">
                                                            <a class="i-des" href="{{route('assignment',['slug'=>$value->slug,'id'=>$value->id])}}">{{$value->name}}</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> {{$value->idGrade->name}}</span>
                                                                <span class="i-cate">|&nbsp;&nbsp; {{$value->idSubject->name}}&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                                <script>
                                                    jQuery(function($){
													var hSideTop	= jQuery("#img-faq-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-faq-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </article>
        <article class="box-cdtt box-blue">
            <div class="container">
                <div class="wraphead">
                    <div class="headdtda">
                        Đề thi thử <b class="cw">Online</b>
                    </div>
                </div>
                <div class="fleft w100per topslide">
                    <div class="row">
                        <div class="box-inline-block canhgiua">
                            <div class="col-inline-block vermid col-md-12 col-xs-12 padbot10">
                                <div class="b-content">
                                    <ul class="list-thionl-index" id="list-thionl-index" style="overflow: hidden; width: 100%; height: 260px;">
                                    <?php $examItems=\App\Models\Manage\Exam::inRandomOrder()->where('status',1)->limit(16)->get(); ?>
                                    @foreach($examItems as $value)    
                                    <li class="item">
                                            <div class="col-md-12 col-xs-12 fright">
                                                <a class="i-des" href="{{route('exam.preview',['id'=>$value->id])}}" target="_blank">{{$value->name}}</a>
                                                <div class="i-tool">
                                                <?php $countquestion=App\Model\ExamDetail::where('id_exam',$value->id)->sum('count'); ?>
                                                    <i class="far fa-file-alt marright5"></i> {{$countquestion}} câu &nbsp;
                                                    <i class="far fa-edit marright5"></i> Thời gian: {{gmdate("i", $value->time_to_do)." p "}} 
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <script>
                                    jQuery(function($){
													var hSideTop	= jQuery("#img-thionl-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-thionl-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </article>
    </section>
    
<?php

$id_user = \Auth::id();
$data_check_result_test = App\Models\Manage\ResultTest::whereNull('point')->where('id_user', $id_user);
$idresume=null;
if(count($data_check_result_test->get()))
    $idresume=$data_check_result_test->first()->idExam;
?>
@if($idresume)
<form style="display:none" id="destroyForm" action="{{route('exam.destroy')}}" method="post">
    @csrf()
    <input type="submit" value="">    
</form>
<div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="modalAlert" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h5 class="modal-title">Thông báo</h5>
                </div>
                <div class="modal-body fs15">
                    <p class="i-content">Hệ thống nhận thấy bạn đang làm dở bài thi {{$idresume->name}}</p>
                    <p class="i-content">Bạn có muốn tiếp tục làm bài không?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('exam.index',['slug'=>$idresume->slug,'id'=>$idresume->id])}}"><button type="button" class="btn btn-success i-btn">Tiếp  tục</button></a>
                    <button id="exitExam" class="btn btn-danger i-btn">Hủy bài thi</button>
                    <button type="button" class="btn btn-info i-btn" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>jQuery('#modalAlert').modal();</script>
    <script>
            jQuery(function($) {
                $('#exitExam').on('click', function(e) {
                e.preventDefault();
                    $('#destroyForm').submit();
            });
        });
    </script>
@endif
@endsection
