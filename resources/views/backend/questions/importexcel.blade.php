@extends('layouts.app')
@section('content')
<?php

use App\Models\Manage\Exam;
use App\Models\Manage\LevelQuestion;

$gradeItems = Exam::all()->pluck('name', 'id');
$subjectItems = LevelQuestion::all()->pluck('name', 'id');
$examvalue = Exam::where('id', Request::get('exam'))->first();
?>
<div class="panel panel-default" style="margin: 0px 15px 0px 15px">
    <div class="panel-body">
        @if(Request::get('exam'))
        <section class="content-header">
            <h1 class="pull-left">Đề thi {{$examvalue->name}}</h1>
        </section>
        @else
        <section class="content-header">
            <h1 class="pull-left">Nhập dữ liệu từ file Excel</h1>
        </section>
        @endif
    </div>
</div>

<div class="content">
    <div class="clearfix"></div>


    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <span class="form-group col-sm-6">
                Tải File Mẫu: <a href="{{asset('upload/files/mau-them-danh-sach-Questions.xlsx')}}">TẠI ĐÂY</a> <br>
                Lưu Ý:<br>
                1, Không sửa file mẫu tránh gây lỗi khi nhập dữ liệu.<br>
                2, Nhập nội dung theo đúng định dạng và cột.<br>
               3, Quá trình upload file và nhập dữ liệu có thể tốn thời gian, vui lòng chờ và không đóng trình duyệt<br>
            </span>
            <form action="{{route('admin.questions.importPost')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if(Request::get('exam'))
                <div class="form-group col-sm-6 hidden">
                    {!! Form::label('exam', 'Exam:') !!}
                    {!! Form::number('exam', Request::get('exam'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6 hidden">
                    {!! Form::label('id_exam', 'Id Exam:') !!}
                    {!! Form::number('id_exam', Request::get('exam'), ['class' => 'form-control']) !!}
                </div>
                @else
                <?php $valueExam = App\Models\Manage\Exam::all()->pluck('name', 'id');
                ?>
                <div class="form-group col-sm-6">
                    {!! Form::label('id_exam', 'Đề thi:') !!}
                    {!! Form::select('id_exam', $valueExam,null, ['class' => 'form-control']) !!}
                </div>
                @endif
                <div class="form-group col-sm-6">
                    {!! Form::label('id_grade', 'Mức độ:') !!}
                    {!! Form::select('id_level_question',$subjectItems, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::label('answer_3', 'Chọn file:') !!}
                    <input name="fileExcel" type="file" accept=".xlsx, .xls, .csv, .ods">
                </div>
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
                    @if(Request::get('exam'))
                    <a href="{{ route('admin.questions.index') }}?exam={{Request::get('exam')}}" class="btn btn-default">Đóng</a>
                    @else
                    <a href="{{ route('admin.questions.index') }}" class="btn btn-default">Đóng</a>
                    @endif
                </div>

            </form>
        </div>
    </div>
    <div class="text-center">

    </div>
</div>

@endsection