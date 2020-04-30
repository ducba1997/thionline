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
                                <?php $data_subject=\App\Model\Subject::all() ?>
                            <ul class="list-cate">
                                @foreach($data_subject as $value)
                                <li class="" data-code="toan-hoc">
                                    <a href="https://hoc247.net/chuong-trinh/lop-6/toan-hoc/">
                                       {{$value->name}} </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cate-col-right" style="background: none">
                    <p style="text-align: center;font-size: 35px;line-height: 50px;font-weight: 500;">
                        {{$data_lesson->name}}
                    </p>
                    {!!$data_lesson->content!!}
                </div>
            </div>

        </div>
        </div>
    </article>
</section>
@endsection