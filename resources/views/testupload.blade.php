<?php

use App\Models\Manage\Exam;
use App\Models\Manage\LevelQuestion;

$gradeItems= Exam::all()->pluck('name','id');
$subjectItems=LevelQuestion::all()->pluck('name','id');
?>

<form action="{{URL::to('import/question')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group col-sm-6">
    {!! Form::label('id_grade', 'Đề thi:') !!}
    {!! Form::select('id_exam',$gradeItems, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('id_grade', 'Mức độ:') !!}
    {!! Form::select('id_level_question',$subjectItems, null, ['class' => 'form-control']) !!}
</div>
    <label for="user-file">
        <div class="btn sbold green"> Add
            <i class="fa fa-plus"></i>
        </div>
    </label>
    <input id="user-file" type="file" name="user_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
    <button type="submit">Import</button>
</form>