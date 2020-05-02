@extends('layouts.home') @section('content')
@section('title')
    Chương trình {{$data_subject->name}} {{$data_grade->name}}
@endsection
@section('submenu')
    {{URL('/chuong-trinh/')}}
@endsection
<section class="wrapbanner2 hidden-xs">
    <div class="container">
        <h1 class="cate-h1 hidden-xs">{{$data_subject->name}} {{$data_grade->name}}</h1>
    </div>
</section>
<section class="main">
    <article class="box-cate search-filter left-collapse">
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

				Chương trình
				{{$data_grade->name}}</h2>

                        <ul class="list-cate">
                            <?php $subjectItems= DB::table('subject')
                                    ->select('subject.id as subject_id','subject.name as subject_name','subject.slug as subject_slug')
                                    ->distinct()
                                    ->join('lesson','lesson.id_subject','=','subject.id')
                                    ->join('grade','grade.id','=','lesson.id_grade')
                                    ->where('lesson.id_grade','=',$data_grade->id)
                                    ->get();
                                    ?>
                                @foreach($subjectItems as $value)
                                <li class="{{ Request::is('chuong-trinh/'.$data_grade->slug.'/'.$value->subject_slug.'*') ? 'act' : '' }}">
                                    <a href="{{route('lesson.full',['grade'=>$data_grade->slug,'subject'=>$value->subject_slug])}}">
                                        {{$value->subject_name}}</a>
                                </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cate-col-right">
                <ul class="list-content-type1">
                @foreach($data_chapter as $value)       
                <li>
                     <div class="box-inline-block">
                            <div class="i-col-1 col-inline-block">
                                <h2 class="i-title">
									<a href="" onclick="return false;">{{$data_subject->name}} {{$data_grade->name}} {{$value->chapter_name}}</a>
								</h2>
                            </div>
                            <div class="i-col-2 col-inline-block" style="width: 66%;">
                                <?php $lessonItems = DB::table('chapter')
                                    ->select('lesson.id as lesson_id','lesson.name as lesson_name','lesson.slug as lesson_slug')
                                    ->join('lesson','lesson.id_chapter','=','chapter.id')
                                    ->where('lesson.id_grade','=',$data_grade->id)
                                    ->where('lesson.id_subject','=',$data_subject->id)
                                    ->where('chapter.id','=',$value->chapter_id)
                                    ->where('lesson.status','=',1)
                                    ->get(); ?>
                                @foreach($lessonItems as $valuelesson)
                                <p class="i-des">
                                    <a href="{{route('lesson',['slug'=>$valuelesson->lesson_slug,'id'=>$valuelesson->lesson_id])}}"><span>■</span>{{$valuelesson->lesson_name}}</a>
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>

                <div data-type="phan-trang" class="fleft w100per canhgiua martop20 displaynone">
                    <img src="images/graphics/phan-trang.png">
                </div>
            </div>

        </div>
    </article>
</section>
@endsection