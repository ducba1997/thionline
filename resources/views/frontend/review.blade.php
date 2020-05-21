@extends('layouts.home')
@section('submenu')
{{URL('/de-thi/')}}
@endsection
@section('title')
{{$data_result_test->exam->name}}
@endsection
@section('css')
</script>
<script src="js/jquery.plugin.min.js""></script>
<script src=" js/jquery.countdown.min.js""> </script>

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
        width: 50%;
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
        margin-top: 20px;
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
        <div class="boxquiz">
            <div class="sec1">
                <h2>Bài kiểm tra</h2>
                <h1>{{$data_result_test->exam->name}}</h1>
            </div>
            <div class="sec2">
                <i class="fa fa-question-circle"></i>
                <span id="count_answered">{{$count_correct_answered}} /</span>
                <span >{{count($data_result_test_detail)}} câu</span>
            </div>
            <div class="sec3">
                <i class="fa fa-clock"></i>
                <span id="future_date" class=""></span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <article class="box-detail">
        <div class="container">

            <form name="frmTest" id="frmTest" method="POST" style="font-size: 15px">
                <?php $i = 0; ?>
                @foreach($data_result_test_detail as $value)
                <?php $arr_answer = array($value->question->answer_1,$value->question->answer_2, $value->question->answer_3, $value->question->correct_answer); shuffle($arr_answer) ?>
                <ul class="dsch" style="margin-bottom:0px">
                    <li class="lch col-xs-12">
                        <div class="clear"></div>
                        <strong class="fleft">Câu {{++$i}}: </strong>&nbsp;
                        <div class="fleft">
                        </div>
                        <div class="fleft">
                            <p>&nbsp{!!$value->question->content!!}</p>
                        </div>
                        <input type="hidden" id="hdnnumans_148997" value="">
                        <div class="clear"></div>
                        <?php $letter = 'A';
                        $answer_x = "answer_1" ?>
                        <ul class="dstl" id="Câu {{$i}}" value="{{$value['id']}}">
                            @if($value->answer===$value->question->correct_answer)
                                @foreach($arr_answer as $answer)
                                    @if($answer===$value->question->correct_answer)
                                        <li id="" class="item-quest-answer " style="background-color:chartreuse">
                                            <div class="fleft">
                                                <span class="fleft">
                                                    <input type="radio" value="{{$answer_x}}" checked> 
                                                    <strong style="font-size: 13px">
                                                        {{$letter}}.&nbsp
                                                        <?php $letter++; $answer_x++; ?> 
                                                    </strong> </span>
                                                <span class="fleft" style="font-size: 13px">
                                                    <p> {!!$answer!!} </p>
                                                </span>
                                            </div>
                                        </li>
                                    @else
                                        <li id="" class="item-quest-answer ">
                                            <div class="fleft">
                                                <span class="fleft">
                                                    <input type="radio" value="{{$answer_x}}" > 
                                                    <strong style="font-size: 13px">
                                                        {{$letter}}.&nbsp
                                                        <?php $letter++; $answer_x++; ?> 
                                                    </strong> </span>
                                                <span class="fleft" style="font-size: 13px">
                                                    <p> {!!$answer!!} </p>
                                                </span>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                @foreach($arr_answer as $answer)
                                    @if($answer===$value->question->correct_answer)
                                        <li id="" class="item-quest-answer " style="background-color:chartreuse">
                                            <div class="fleft">
                                                <span class="fleft">
                                                    <input type="radio" value="{{$answer_x}}" > 
                                                    <strong style="font-size: 13px">
                                                        {{$letter}}.&nbsp
                                                        <?php $letter++; $answer_x++; ?> 
                                                    </strong> </span>
                                                <span class="fleft" style="font-size: 13px">
                                                    <p> {!!$answer!!} </p>
                                                </span>
                                            </div>
                                        </li>
                                    @elseif($answer===$value->answer)
                                        <li id="" class="item-quest-answer " style="background-color:#ff3019">
                                            <div class="fleft">
                                                <span class="fleft">
                                                    <input type="radio" value="{{$answer_x}}" checked> 
                                                    <strong style="font-size: 13px">
                                                        {{$letter}}.&nbsp
                                                        <?php $letter++; $answer_x++; ?> 
                                                    </strong> </span>
                                                <span class="fleft" style="font-size: 13px">
                                                    <p> {!!$answer!!} </p>
                                                </span>
                                            </div>
                                        </li>
                                    @else
                                        <li id="" class="item-quest-answer ">
                                            <div class="fleft">
                                                <span class="fleft">
                                                    <input type="radio" value="{{$answer_x}}" > 
                                                    <strong style="font-size: 13px">
                                                        {{$letter}}.&nbsp
                                                        <?php $letter++; $answer_x++; ?> 
                                                    </strong> </span>
                                                <span class="fleft" style="font-size: 13px">
                                                    <p> {!!$answer!!} </p>
                                                </span>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>

                </ul>
                @endforeach
            </form>
            
            <a href="{{URL('/')}}"><input type="button" class="btn btn-primary" style="margin-top: 20px"  value="Nhấn vào đây để trở về trang chủ"></input></a>
        </div>
        </li>
        </ul>

        </div>
    </article>
</section>
<script>
</script>
@endsection