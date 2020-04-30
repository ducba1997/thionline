@extends('layouts.home')
@section('title')
	{{$data_exam->name}}
@endsection
@section('css')
<style>
	.dsch {
		float: left;
		width: 100%;
		margin-top: 20px;
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
		width: 100%;
		list-style: none;
		float: left;
		margin-bottom: 10px;
		padding: 10px;
		font-weight: normal;
		border: 1px solid #e2e2e2;
	}

	.dstl li input[type=radio] {
		float: left;
		width: 20px;
		margin-right: 5px;
		height: 15px;
		vertical-align: middle;
	}

	.boxquiz {
		width: 100%;
		background: #b6ddf7;
		padding: 10px;
		border: 1px solid #8bb2cc;
		margin: 20px 0px;
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

	.boxquizmobi .stat .sec2 {
		margin-left: 10px;
	}

	.boxquizmobi .caudung {
		color: #63c834;
		margin-left: 20px;
	}

	.boxquizmobi .causai {
		color: #f24806;
		margin-left: 20px;
	}

	.finish {
		border: 1px solid #e2e2e2;
		padding: 1px 5px;
		font-size: 13px;
		float: right;
		margin-left: 5px;
	}

	.cautt {
		border: 1px solid #e2e2e2;
		padding: 1px 5px;
		font-size: 18px;
		float: right;
		margin-left: 5px;
	}

	.cdone {
		color: #0e76bc;
	}

	.cright {
		color: #63c834;
	}

	.cflag {
		color: #f24806;
	}

	.bgdung {
		background: #dfffd4;
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

	.lesstion_info span {
		display: inline-block;
		text-align: center;
	}

	.lesstion_info {
		color: #FFF;
		width: 100%;
		margin-top: 10px;
	}

	.lesstion_info i {
		color: #FFF;
	}

	.lesstion_info button {
		margin-top: 25px;
	}

	.boxquiz .ava {
		border-radius: 50px;
	}

	.boxquiz .quote1 {
		position: absolute;
		top: 0px;
		right: 16px;
		width: 140px;
	}

	.boxquiz .quote2 {
		position: absolute;
		top: 70px;
		right: -16px;
		width: 150px;
		font-weight: 700;
		color: #F00;
		font-size: 18px;
	}

	.boxquiz .quote3 {
		position: absolute;
		top: 100px;
		right: -6px;
		width: 150px;
		font-weight: 700;
		font-size: 36px;
	}

	.boxquiz .iava {
		position: absolute;
		top: 52px;
		left: 52px;
	}

	.boxquizmobi {
		margin-bottom: 20px;
		float: left;
		width: 36%;
	}

	@media (max-width: 767px) {
		.item-cau {
			width: 16%;
		}

		.boxquizmobi {
			width: 100%;
		}

		.boxquiz .quote1 {
			right: 10px;
		}
	}
</style>
@endsection
@section('content')
<section class="main">
	<div class="container">
		<div class="row">
			<div class="boxquiz">
				<div class="col-md-4 col-xs-12 posrelative">
					<img src="upload/kqt.png">
					<span class="iava"></span>
					<p class="quote1">Chúc mừng bạn đã vượt qua bài kiểm tra</p>
					<p class="quote3">{{$count_correct_answered}}/{{$count_question}}</p>

				</div>
				<div class="col-md-6 hidden-xs">
					<h1>{{$data_exam->name}}</h1>
					<div class="lesstion_info">
						<span><i class="fa fa-question-circle"></i>{{$count_question}} câu hỏi</span>
						<span><i class="fa fa-clock" aria-hidden="true"></i>  <?php echo gmdate("i", $data_result_test->exam->time_to_do)." phút "; ?></span>
						<div class="clear"></div> 
						@if($data_exam->allow_review_answer==1)
							<a class="btn btn-fb-lg" href="{{route('exam.review',$data_result_test->id)}}" target="_blank"><button class="btn btn-primary">Xem đáp án</button></a>
						@endif
						</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="boxquizmobi">
				<div class="stat">
					Điểm số: <strong>{{$data_result_test->point}} điểm</strong>
					<span class="caudung"><i class="fa fa-check-circle"></i> {{$count_correct_answered}} câu đúng</span>
					<span class="causai"><i class="fa fa-times-circle"></i> {{$count_question-$count_correct_answered}} câu sai</span>
				</div>
			</div>
		</div>

	</div>
	<article class="box-detail">
		<div class="container">

			<div class="clear"></div>
			<div class="martop10">
				<p class="fleft">
					@if($data_exam->allow_review_answer==1)
						<b class="cred">Lưu ý:</b> Các bạn có thể bấm vào xem đáp án để xem lại kết quả
					@endif
				</p>
				<p class="fright">
					<a href="{{URL('/')}}"><button type="button" class="btn btn_orange_sm nuthong fright">Quay lại trang chủ</button></a>
				</p>
			</div>
		</div>
	</article>
</section>
@endsection