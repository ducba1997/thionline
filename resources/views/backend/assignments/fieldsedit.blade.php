<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Tiêu đề:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6 hidden">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', 'avc', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Mô tả:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<?php

use App\Models\Manage\Chapter;
use App\Models\Manage\Grade;
use App\Models\Manage\Subject;

$gradeItems= Grade::all()->pluck('name','id');
$subjectItems=Subject::all()->pluck('name','id');
$chapterItems=Chapter::all()->pluck('name','id');
$stt=array(
    '1'=>'Mở',
    '0'=>'Đóng' 
);
?>
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


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Trạng thái:') !!}
    {!! Form::select('status',$stt, null, ['class' => 'form-control']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.assignments.index') }}" class="btn btn-default">Đóng</a>
</div>
