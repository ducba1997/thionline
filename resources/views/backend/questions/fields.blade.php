<?php $valuelevelquestion=App\Models\Manage\LevelQuestion::all()->pluck('name','id'); ?>

<!-- Id Level Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_level_question', 'Mức độ câu hỏi:') !!}
    {!! Form::select('id_level_question',$valuelevelquestion, null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Nội dung:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Correct Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correct_answer', 'Đáp án đúng:') !!}
    {!! Form::text('correct_answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_1', 'Đáp án 1:') !!}
    {!! Form::text('answer_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_2', 'Đáp án 2:') !!}
    {!! Form::text('answer_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_3', 'Đáp án 3:') !!}
    {!! Form::text('answer_3', null, ['class' => 'form-control']) !!}
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
