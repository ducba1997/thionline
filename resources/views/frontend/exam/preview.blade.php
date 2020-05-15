@extends('layouts.home') 
@section('title')
{{$data_exam->name}}
@endsection
@section('submenu')
{{URL('/de-thi/')}}
@endsection
@section('content')
<section class="wrapbanner">
	<div class="container">
		<h1 class="cate-h1">{{$data_exam->name}}</h1>
	</div>
</section>
<section class="main">
		<article class="box-detail">
		<div class="container">

<div class="hdlbtn">
		<h2>Hướng dẫn làm bài TRẮC NGHIỆM</h2>
	<ul>
		<li><img src="upload/caudung22x22.png"> Chọn câu trả lời đúng</li>
        <li>
            <button class="btn btn-primary" onclick="return false">Lưu đáp án </button> 
            Chọn nút <strong>Lưu đáp án</strong> để lưu lại đáp án
        </li>
        <li>
            <button class="btn btn-success flagging" onclick="return false">Xem lại</button>
            Chọn nút <strong>Xem lại</strong> cho những câu trả lời <strong>chưa chắc chắn</strong> để xem lại
        </li>
        <li>
            <button class="btn btn-warning" onclick="return false">Nạp bài</button> 
            Chọn nút <strong>Nạp bài</strong> để nạp bài thi
        </li>
		<li>
            <button class="btn btn-danger" onclick="return false">Thoát</button> 
            Chọn nút <strong>Thoát</strong> để hủy bỏ và thoát khỏi bài thi
        </li>
        

		<li>
            <span class="lyh"><u>Lưu ý:</u></span>
                <p>- Đáp án đã được lưu sẽ đổi từ màu <button class="btn btn-default" onclick="return false">1</button> sang màu <button class="btn btn-primary" onclick="return false">1</button> ở danh sách câu hỏi phía bên phải màn hình.</p>
                <p>- Những câu <strong>chưa chọn đáp án</strong> sẽ được tính là câu trả lời sai.</p>
                <p>- Hết giờ hệ thống sẽ tự động nạp bài.</p>
        </li>
	</ul>
	</div>
		<div class="canhgiua">
        <?php

            $id_user = \Auth::id();
            $data_check_result_test = App\Models\Manage\ResultTest::whereNull('point')->where('id_user', $id_user)->where('id_exam',$data_exam->id);
            $checkresume=count($data_check_result_test->get());
        ?>
        @if($checkresume)
            <a href="{{route('exam.index',['slug'=>$data_exam->slug,'id'=>$data_exam->id])}}">
                <button class="btn btn_orange_sm nuthong marright10" ><i class="fa fa-check-circle"></i> Tiếp tục làm bài</button>
            </a>
        @else
        <a href="{{route('exam.index',['slug'=>$data_exam->slug,'id'=>$data_exam->id])}}">
                <button class="btn btn_orange_sm nuthong marright10" ><i class="fa fa-check-circle"></i> Bắt đầu làm bài</button>
            </a>   
        @endif

		</div>


		</div>
	</article>
	</section>
@endsection