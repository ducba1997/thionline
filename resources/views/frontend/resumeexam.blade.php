@extends('layouts.home')
@section('submenu')
{{URL('/de-thi/')}}
@endsection
@section('title')
{{$data_exam['name']}}
@endsection
@section('css')
</script>
<script src="js/jquery.plugin.min.js""></script>
<script src=" js/jquery.countdown.min.js""> </script> <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    
   
</script>
<style>
    .imgreply {
        float: left;
        margin: 10px;
    }

    .main,
    .box-detail {
        background: #f7f7f7;
    }

    .loigiai {
        margin: 20px 0px;
        width: 100%;
        background: #ffffe8;
        border: 1px solid #fdce98;
        border-left: 3px solid #fdce98;
        padding: 10px;
        font-size: 13px;
        float: left;
    }

    .loigiai img {
        width: auto;
        max-width: 100%
    }

    .box_tuluan {
        background: #f6f7f8;
        float: left;
        width: 100%;
        padding: 10px;
    }

    .box_tuluan li {
        list-style: none;
        display: inline;
        padding: 0px 10px;
    }

    .box_tuluan .ico {
        padding-right: 5px;
    }

    .box_tuluan a {
        position: relative;
    }

    .box_tuluan .duyet:after,
    .box_tuluan li:hover a:after {
        content: "";
        background: #3f97ee;
        height: 2px;
        position: absolute;
        bottom: -6px;
        left: 5%;
        width: 100%;
    }

    .boxcam {
        width: 100%;
        background: #ffd698;
        padding: 10px;
        margin: 20px 0px;
        min-height: 40px;
    }

    .checkflag {
        background: #fff;
        float: left;
        height: 34px;
        line-height: 34px;
        width: 100px;
        border-radius: 5px;
        border: 1px solid #ececec;
    }

    .checkboxFive {
        width: 25px;
        float: left;
        margin-right: 10px;
        position: relative;
        margin-top: 3px;
        margin-left: 2px;
    }

    .checkboxFive label {
        cursor: pointer;
        position: absolute;
        width: 25px;
        height: 25px;
        top: 0;
        left: 0;
        background: #fff;
        border: 1px solid #ddd;
    }

    .checkboxFive label:after {
        opacity: .2;
        content: '';
        position: absolute;
        width: 9px;
        height: 5px;
        background: transparent;
        top: 6px;
        left: 7px;
        border: 3px solid #333;
        border-top: none;
        border-right: none;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .checkboxFive label:hover::after {
        opacity: .5
    }

    .checkboxFive input[type=checkbox]:checked+label:after {
        opacity: 1
    }

    .dsch {
        float: left;
        width: 100%;
        padding-top: 30px;
        background: #fff;
        box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.2);
    }

    .dsch p img {
        vertical-align: middle;
    }

    .dsch li.lch {
        list-style: none;
        width: 100%;
        float: left;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e2e2e2;
        font-weight: normal;
    }

    .dsch li.lch:last-child {
        border: none;
    }

    .dsdl {
        margin-top: 20px;
    }

    .dstl li {
        width: 80%;
        list-style: none;
        float: left;
        margin-right: 1000px;
        margin-bottom: 10px;
        padding: 10px;
        font-weight: normal;
        border: 1px solid #e2e2e2;
        cursor: pointer;
        border-radius: 5px;
    }

    .dstl li input[type=radio] {
        float: left;
        width: 20px;
        margin-right: 5px;
        height: 15px;
        vertical-align: middle;
    }

    .nuthong {
        background: #f77f65;
        background: -moz-linear-gradient(top, #f77f65 0%, #f55f57 100%);
        background: -webkit-linear-gradient(top, #f77f65 0%, #f55f57 100%);
        background: linear-gradient(to bottom, #f77f65 0%, #f55f57 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f77f65', endColorstr='#f55f57', GradientType=0);
    }

    .boxquiz {
        width: 100%;
        background: #ffd698;
        padding: 10px;
        border: 1px solid #8bb2cc;
        padding-bottom: 10px;
    }

    .boxquiz h1 {
        font-size: 18px;
    }

    .boxquiz h2 {
        color: #0e76bc;
        margin-top: 0px;
        font-size: 16px;
    }

    .boxquiz .sec1 {
        width: 80%;
        float: left;
    }

    .boxquiz .sec2 {
        width: 10%;
        float: left;
        text-align: center;
        border-left: 1px solid #fff;
        min-height: 50px;
    }

    .boxquiz .sec3 {
        width: 10%;
        float: left;
        text-align: center;
        border-left: 1px solid #fff;
        min-height: 50px;
    }

    .boxquiz i {
        color: #0e76bc;
        width: 100%;
    }

    .boxquizmobi .h1-test {
        float: left;
        margin: 20px 0px 10px 0px;
        padding: 0px 10px;
    }

    .boxquizmobi .stat {
        float: left;
        background: #f5f5f5;
        padding: 10px;
        border-bottom: 1px solid #ececec;
        width: 100%;
    }

    .boxquizmobi .stat .sec2,
    .boxquizmobi .stat .sec3,
    .boxquizmobi .stat p {
        float: right;
    }

    .boxquizmobi .stat i {
        float: left;
        margin-right: 10px;
        margin-top: 3px;
    }

    .boxquizmobi .stat .sec2 {
        margin-left: 10px;
    }

    .finish {
        border: 1px solid #e2e2e2;
        padding: 5px 15px;
        font-size: 13px;
        float: right;
        margin-left: 5px;
        background: #fff;
    }

    .cautt {
        border: 1px solid #e2e2e2;
        padding: 5px 15px;
        font-size: 18px;
        float: right;
        margin-left: 5px;
        background: #fff;
        margin-top: 2px;
        border-radius: 5px;
    }

    .cdone {
        color: #0e76bc;
    }

    .cflag {
        color: #f24806;
    }

    .socau {
        float: left;
        font-weight: 700;
        width: 100%;
        border-top: 1px solid #FFF;
        margin-top: 20px;
        padding-top: 20px;
    }

    .socau span {
        border: 1px solid #e2e2e2;
        padding: 6px;
        background: #FFF;
    }

    .socaumobi {
        width: 100%;
        background: #fbf8dc;
        padding: 10px;
        border: 1px solid #fde4ba;
        margin: 10px 0px;
        float: left;
    }

    .socaumobi span.cdone:before {
        content: " ";
        background: #0e76bc;
        width: 7px;
        height: 7px;
        margin: 7px 5px 0px 0px;
        float: left;
    }

    .socaumobi span.cflag:before {
        content: " ";
        background: #f24806;
        width: 7px;
        height: 7px;
        margin: 7px 5px 0px 0px;
        float: left;
    }

    .socaumobi span:before {
        content: " ";
        background: #000;
        width: 7px;
        height: 7px;
        margin: 7px 5px 0px 0px;
        float: left;
    }

    .item-cau {
        width: 5%;
        background: #FFF;
        border: 1px solid #d6d6d6;
        padding: 10px;
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
        text-align: center;
        font-weight: 700;
    }

    .kqcau {
        padding-top: 30px;
    }

    @media (max-width: 767px) {
        .boxquiz {
            display: none;
        }

        .item-cau {
            width: 16%;
        }
    }
</style>
@endsection
@section('content')
<section class="main">
    <div class="container" id="danhmuctieude">
        <div class="boxquiz" id="tieude">
            <div class="sec1">
                <h2>Bài kiểm tra</h2>
                <h1>{{$data_exam['name']}}</h1>
            </div>
            <div class="sec2">
                <i class="fa fa-question-circle"></i>
                <span id="count_answered">{{$count_answered}} /</span>
                <span >{{count($data_question)}} câu</span>
            </div>
            <div class="sec3">
                <i class="fa fa-clock"></i>
                <span class="future_date" class=""></span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <article class="box-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="border-right: 1px solid #8bb2cc;border-left: 1px solid #8bb2cc; margin-left: 15px;">
                    <form name="frmTest" id="frmTest" method="POST" style="font-size: 15px">
                        <?php $i = 0; ?>
                        @foreach($data_question as $value)
                        <?php $arr_answer = array($value->question->answer_1,$value->question->answer_2,$value->question->answer_3,$value->question->correct_answer);shuffle($arr_answer); ?>
                        <ul class="dsch" id="qt{{$value->id}}" style="margin-bottom:0px">
                            <li class="lch col-xs-12" >
                                <div class="clear"></div>
                                <strong class="fleft">Câu {{++$i}}: </strong>&nbsp;
                                <div class="fleft"> 
                                </div>
                                <div class="fleft">
                                    <p>&nbsp{{$value->question->content}}</p>
                                </div>
                                <div class="clear"></div>
                                <?php $letter = 'A'; ?>
                                <ul class="dstl" tag="qt{{$value->id}}" value="{{$value->question->id}}">
                                    @foreach($arr_answer as $answer)
                                    @if($answer==$value->answer)
                                    <li id="" class="item-quest-answer " style="background-color: #b5ddf7;'">
                                        <div class="fleft">
                                            <span class="fleft">
                                                <input type="radio" value="{{$answer}}" name="question_{{$value->question->id}}" id="" checked> <strong style="font-size: 13px">{{$letter}}.&nbsp<?php $letter++;
                                                                                                                                                                                    ?> </strong> </span>
                                            <span class="fleft" style="font-size: 13px">
                                                <p> {{$answer}} </p>
                                            </span>
                                        </div>
                                    </li>
                                    @else
                                    <li id="" class="item-quest-answer ">
                                        <div class="fleft">
                                            <span class="fleft">
                                                <input type="radio" value="{{$answer}}" name="question_{{$value->question->id}}" id=""> <strong style="font-size: 13px">{{$letter}}.&nbsp<?php $letter++;
                                                                                                                                                                                    ?> </strong> </span>
                                            <span class="fleft" style="font-size: 13px">
                                                <p> {{$answer}} </p>
                                            </span>
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach

                                    <!--<button class="btn btn-primary clicking" onclick="return false">
                                    @if($value->answer)
                                    Đã lưu
                                    @else
                                        Lưu đáp án 
                                    @endif
                                    
                                    </button>
                                    &nbsp&nbsp-->
                                    <button class="btn btn-success flagging" onclick="return false">Xem lại</button>
                                </ul>

                        </ul>
                        @endforeach
                        <ul class="dsch" style="margin-bottom:0px; height: 200px">
                        </ul>
                    </form>
                </div>
                <div class="col-md-3" style="margin-top: 50px;margin-left: 50px">
                    <div class="col text-center">
                        <div class="row">
                            <div class="logo">
                                <h4 style="font-weight: bold;">Câu hỏi:</h4>
                            </div>
                            <?php $qt=0; ?>
                            @foreach($data_question as $value)
                            @if($value->answer)
                            <a href="{{Request::url()}}#qt{{$value->id}}"><button type="button" class="btn btn-primary"
                                    style="width:50px;margin:3px"">
                                    {{++$qt}}
                                </button></a> 
                            @else
                            <a href="{{Request::url()}}#qt{{$value->id}}"><button type="button" class="btn btn-default"
                                    style="width:50px;margin:3px"">
                                    {{++$qt}}
                                </button></a> 
                            @endif
                            @endforeach
                        </div>
                        <div class="row">
                        <a id="submitExam" class="btn btn-warning" style="margin-top: 10px">Nạp bài</a>
                        <h4 class="future_date" ></h4>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row" style="border-top: 1px solid">
                <div class="col-sm-5"></div>
                <div class="col-sm-4">
                <button id="submitExam" class="btn btn-warning" style="margin-top: 10px">Nhấn vào đây để nạp bài</button>
                <button id="exitExam" class="btn btn-danger" style="margin-top: 10px">Thoát</button>
                </div>
            </div>
            
            <form style="display: none"  id="calculateForm" action="{{route('exam.calculate')}}" method="post">
            @csrf()
                <input type="submit" value="xác thực">    
            </form>

            <form style="display:none" id="destroyForm" action="{{route('exam.destroy')}}" method="post">
                @csrf()
                <input type="submit" value="">    
            </form>
        </div>

        </div>
    </article>
</section>
<script>
    $DOMAIN="{{URL('/')}}/";

    

    jQuery(function($) {

        $int_minute = {{$time }};

        

        /*jQuery('.future_date').countdown({
            until: $int_minute,
            padZeroes: true,
            format: 'MS',
            compact: true,
            onExpiry: EndCountdown,
            onTick: Callbacks,
            layout: '{mn} : {sn}'
        });*/

        function Callbacks(periods) {
            $int_minute--;
            if (jQuery.countdown.periodsToSeconds(periods) === 30) {
                jQuery('.boxquiz').css('background-color', 'red');
                location.href="{{Request::url().'#tieude'}}";
            } else if (jQuery.countdown.periodsToSeconds(periods) <= 0) {
                //EndCountdown();
            }
        }

        function EndCountdown() {
            jQuery('#future_date').removeClass('halfway').addClass('ended');
            jQuery('#future_date').html('&#9829;');
            $('#calculateForm').submit();
            //jQuery('#frmTest').submit();
            //window.location.href = window.location.href  + '?timeover=1';
            // return;
        }

        

        $('#submitExam').on('click', function(e) {
            e.preventDefault();
            var result = confirm("Xác nhận nộp bài");
            if (result) {
                $('#calculateForm').submit();
            }
        });

        $('#exitExam').on('click', function(e) {
            e.preventDefault();
            var result = confirm("Bạn có chắc chắn không?");
            if (result) {
                $('#destroyForm').submit();
            }
        });

        $('.flagging').on('click', function(e) {
            $this = $(this);
            $id_data = $this.parent().attr('tag');
            $('a[href*="{{Request::url()}}#'+$id_data+'"]').children().attr('class','btn btn-success');
        });

        $(".item-quest-answer").bind("click", function(e) {
            event.stopPropagation();
            event.stopImmediatePropagation();
            $(".item-quest-answer").css('background', 'none');
            //jQuery(this).find('input[type=radio]:not(:checked)').parent().parent().parent().css('background', 'none');
            jQuery(this).find('input[type=radio]').prop('checked', true);
            $.each($(".item-quest-answer"), function() {
                if (jQuery(this).find('input[type=radio]:checked').val())
                    $(this).css('background', '#b5ddf7');
            });
            $this = $(this);
            //$id_question =$this.parent();
            $id_question = $this.parent().attr('value');
            $id_data = $this.parent().attr('tag');
            $answer = $this.parent().find('input[type=radio]:checked').val();
            
            if($answer){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{route('exam.save')}}",
                type: "post",
                data:{
                        question: $id_question,
                        answer: $answer,
                        time_remaining: $int_minute
                },
                dataType: 'text',
                success: function(data) {
                    Pace.restart();
                    $('#count_answered').text(data+" /"); 
                    $('a[href*="{{Request::url()}}#'+$id_data+'"]').children().attr('class','btn btn-primary');
                },
                error: function(error) {
                    alert("Không thể lưu đáp án vào lúc này");
                }
            });
            }else{
                alert('Bạn chưa chọn đáp án')
            }
        });

        $('.clicking').on('click', function(e) {
            $this = $(this);
            //$id_question =$this.parent();
            $id_question = $this.parent().attr('value');
            $id_data = $this.parent().attr('tag');
            $answer = $this.parent().find('input[type=radio]:checked').val();
            
            if($answer){
                $this.text("Đang lưu...");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                url: "{{route('exam.save')}}",
                type: "post",
                data:{
                        question: $id_question,
                        answer: $answer,
                        time_remaining: $int_minute
                },
                dataType: 'text',
                success: function(data) {
                    Pace.restart();
                    $('#count_answered').text(data+" /");
                    $this.text("Đã lưu"); 
                    $('a[href*="{{Request::url()}}#'+$id_data+'"]').children().attr('class','btn btn-primary');
                },
                error: function(error) {
                    alert("Không thể lưu đáp án vào lúc này");
                    $this.text("Đáp án chưa lưu"); 
                }
            });
            }else{
                alert('Bạn chưa chọn đáp án')
            }
            
            
        });
    });
    jQuery('#frmTest').slimscroll({
        height: '480px',
    });
    jQuery('#toggleButton').click(function() {
        jQuery('#future_date').countdown('toggle');
        jQuery('#future_date2').countdown('toggle');
    });

    //-- xu ly click vo li thi chon radio do
    jQuery(document).ready(function() { 
        function submitExam(){
            $('#calculateForm').submit();
         }
        function confirm_submit(){
            var result = confirm("Xác nhận nộp bài");
                if (result) {
                    submitExam();
                }
        }
     });
</script>
@endsection