<?php

use App\Models\Manage\Chapter;
use App\Models\Manage\Grade;
use App\Models\Manage\Subject;

$gradeItems= Grade::all()->pluck('name','id');
$subjectItems=Subject::all()->pluck('name','id');
$chapterItems=Chapter::all()->pluck('name','id');
$stt=array(
    '1'=>'Hoạt động',
    '0'=>'Không hoạt động' 
);
$tt=array(
    '1' => 'Cho phép',
    '0' => 'Không cho phép'
)
?>

<!-- Id Grade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_grade', 'Khối:') !!}
    {!! Form::select('id_grade',$gradeItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_subject', 'Môn:') !!}
    {!! Form::select('id_subject', $subjectItems,null, ['class' => 'form-control']) !!}
</div>

<!-- Id Chapter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_chapter', 'Chương:') !!}
    {!! Form::select('id_chapter',$chapterItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Users Field -->
<div class="form-group col-sm-6 hidden">
    {!! Form::label('id_users', 'Id Users:') !!}
    {!! Form::text('id_users', 'da', ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Tên:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6 hidden">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', 'a', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Mô tả:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6 hidden">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Time To Do Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_to_do', 'Thời gian làm bài (giây):') !!}
    {!! Form::number('time_to_do', null, ['class' => 'form-control']) !!}
</div>

<!-- Allow Review Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allow_review_answer', 'Cho phép xem lại đáp án:') !!}
    {!! Form::select('allow_review_answer',$tt, null, ['class' => 'form-control']) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Trạng thái:') !!}
    {!! Form::select('status',$stt, null, ['class' => 'form-control']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.exams.index') }}" class="btn btn-default">Đóng</a>
</div>
