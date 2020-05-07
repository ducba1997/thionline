<!-- Id Exam Field -->
@if(Request::get('exam'))
    <?php $valueExam=\App\Models\Manage\Exam::where('id',Request::get('exam'))->first(); ?>
@endif
<div class="form-group col-sm-6 hidden">
    {!! Form::label('id_exam', 'Id Exam:') !!}
    {!! Form::number('id_exam', $valueExam->id, ['class' => 'form-control']) !!}
</div>

<!-- Id Level Question Field -->
<?php use App\Models\Manage\LevelQuestion;

$levelquestionItems= LevelQuestion::all()->pluck('name','id'); ?>

<div class="form-group col-sm-6 ">
{!! Form::label('id_level_question', 'Mức độ câu hỏi:') !!}
    {!! Form::select('id_level_question', $levelquestionItems,null, ['class' => 'form-control','disabled']) !!}
</div>
<!-- Count Field -->
<div class="form-group col-sm-6 hidden">
    {!! Form::label('count', 'Số lượng câu hỏi:') !!}
    {!! Form::number('id_level_question', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('count', 'Số lượng câu hỏi:') !!}
    {!! Form::number('count', null, ['class' => 'form-control']) !!}
</div>

<!-- Percent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percent', 'Phần trăm điểm:') !!}
    {!! Form::text('percent', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.examDetails.index') }}?exam={{$valueExam->id}}" class="btn btn-default">Đóng</a>
</div>
