@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Đề thi
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'admin.exams.store']) !!}
                <div class="">
            <div class="box-header with-border">
              <h3 class="box-title">Số lượng câu hỏi</h3>
            </div>
            <div class="box-body" style="border-bottom: 1px solid #f4f4f4;">
                    <?php

                    use App\Models\Manage\LevelQuestion;

                    $levelquestionItems = LevelQuestion::all(); ?>
                    @foreach($levelquestionItems as $value)
                    <div class="form-group col-sm-6">
                        {!! Form::label('id_grade', $value->name.": ") !!}
                        <input class="form-control" name="question[<?php echo e(str_slug($value->id)); ?>]" type="text" value="">
                    </div>
                    @endforeach
                </div>
                <div class="box-header">
              <h3 class="box-title">Thông tin đề thi</h3>
            </div>
          </div>
                
                @include('backend.exams.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection