@extends('layouts.home')
@section('title')
    {{$data_lesson->name}}
    {{$data_lesson->subject->name}}
    {{$data_lesson->grade->name}}
    {{$data_lesson->chapter->name}}
@endsection
@section('content')
<section class="main">
    <article class="box-detail">

        <div class="fleft w100per posrelative"></div>

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

                                Chương trình {{$data_lesson->grade->name}}</h2>
                            <ul class="list-cate">
                                <?php 
                                    $subjectItems= DB::table('subject')
                                    ->select('subject.id as subject_id','subject.name as subject_name','subject.slug as subject_slug')
                                    ->distinct()
                                    ->join('lesson','lesson.id_subject','=','subject.id')
                                    ->join('grade','grade.id','=','lesson.id_grade')
                                    ->where('lesson.id_grade','=',$data_lesson->grade->id)
                                    ->get();
                                
                                ?>
                                @foreach($subjectItems as $value)
                                <li class="">
                                    <a href="{{route('lesson.full',['grade'=>$data_lesson->grade->slug,'subject'=>$value->subject_slug])}}">
                                        {{$value->subject_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cate-col-right content-fck" style="background: none">
                    <p style="text-align: center;font-size: 35px;line-height: 50px;font-weight: 500;">
                        {{$data_lesson->name}}
                    </p>
                    {!!$data_lesson->content!!}
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