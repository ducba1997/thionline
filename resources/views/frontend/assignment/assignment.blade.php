@extends('layouts.home')
@section('submenu')
    {{URL('/tai-lieu/')}}
@endsection
@section('title')
{{$data_assignment->name}}
{{$data_assignment->idSubject->name}}
{{$data_assignment->idGrade->name}}
{{$data_assignment->idChapter->name}}
@endsection
@section('content')
<?php $arr= explode(".",$data_assignment->url); 
    $extensionFile=$arr[1];
?>
@if(Auth::check())

@if($extensionFile=='pdf')
<div class="modal fade .modal-noborder modal-dat-cauhoi in" id="modal-document-viewonline" tabindex="-1" role="dialog" aria-labelledby="modal-document-viewonline">
	<!--<div class="modal-full">-->
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<label class="modal-title" id="myModalLabel">Xem online</label>
				</div>
				<div class="modal-body" style="min-height:300px;"><iframe src="{{route('assignment.viewonline',$data_assignment->id)}}" width="100%" height="90%"></iframe></div>
				<div class="modal-footer" hidden="true"></div>
			</div>
		</div>
	<!--</div>-->
</div>
@endif
@else
<div class="modal fade" id="modal-document-download" tabindex="-1" role="dialog" aria-labelledby="modal-document-download">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<p class="modal-title">Thông báo</p>
			</div>
			<div class="modal-body fs15">
				<p class="">Bạn vui lòng đăng nhập trước khi sử dụng chức năng này.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Bỏ qua</button>
				<a href="{{URL('/login')}}">
				<button type="button" class="btn btn-primary">Đăng nhập</button></a>
			</div>
		</div>
	</div>
</div>
@endif
<section class="main">
    <article class="box-detail">
    <section class="wrapbanner">
	<div class="container">
		
		<h1 class="cate-h1">{{$data_assignment->name}}</h1>

	</div>
</section>
        <div class="fleft w100per">
            <div class="box-tab-borbot">
                <div class="container">
                    <h2 class="item-tab item-tab-2">
                        <a class="act" href="javascript:void(0);">
                            <span class="hidden-xs">Tóm tắt nội dung</span>
                        </a>
                    </h2>
                    @if(Auth::check())
                    @if($extensionFile=='pdf')
                    <div class="item-tab item-tab-2">
                        <span class="i-view" data-toggle="modal" data-target="#modal-document-viewonline">
                            <i class="fa fa-eye hidden-xs" aria-hidden="true"></i>
                            <span class="hidden-xs">Xem online</span>
                        </span>
                    </div>
                    @endif
                    <div class="item-tab item-tab-2">
                        <a href="{{route('assignment.download',$data_assignment->id)}}">
                        <span class="i-download" data-toggle="modal">
                            <i class="fa fa-download hidden-xs" aria-hidden="true"></i> Tải về</span>
                        </a>
                    </div>
                    @else
                    @if($extensionFile=='pdf')
                    <div class="item-tab item-tab-2">
                        <span class="i-view" data-toggle="modal" data-target="#modal-document-download">
                            <i class="fa fa-eye hidden-xs" aria-hidden="true"></i>
                            <span class="hidden-xs">Xem online</span>
                        </span>
                    </div>
                    @endif
                    <div class="item-tab item-tab-2">
                        <span class="i-download" data-toggle="modal" data-target="#modal-document-download">
                            <i class="fa fa-download hidden-xs" aria-hidden="true"></i> Tải về</span>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="fleft w100per">
            <div class="container">
                <div class="cate-col-left">
                    <style>
                        .list-cate li.act a {
                            padding: 5px;
                        }
                    </style>
                    <div class="box-scroll-left">
                        <div class="scroll-left " id="scroll-left">
                            <h2 class="cate-title">

                                Chương trình {{$data_assignment->idGrade->name}}</h2>
                            <ul class="list-cate">
                                <?php
                                $subjectItems = DB::table('subject')
                                    ->select('subject.id as subject_id', 'subject.name as subject_name', 'subject.slug as subject_slug')
                                    ->distinct()
                                    ->join('assignment', 'assignment.id_subject', '=', 'subject.id')
                                    ->join('grade', 'grade.id', '=', 'assignment.id_grade')
                                    ->where('assignment.id_grade', '=', $data_assignment->idGrade->id)
                                    ->get();

                                ?>
                                @foreach($subjectItems as $value)
                                <li class="">
                                    <a href="">
                                        {{$value->subject_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cate-col-right content-fck" style="background: none">
                    {!!$data_assignment->description!!}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="5" data-width=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </article>
</section>
@endsection