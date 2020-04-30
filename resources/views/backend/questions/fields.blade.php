<!-- Id Exam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_exam', 'Id Exam:') !!}
    {!! Form::number('id_exam', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Level Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_level_question', 'Id Level Question:') !!}
    {!! Form::number('id_level_question', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Correct Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correct_answer', 'Correct Answer:') !!}
    {!! Form::text('correct_answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_1', 'Answer 1:') !!}
    {!! Form::text('answer_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_2', 'Answer 2:') !!}
    {!! Form::text('answer_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_3', 'Answer 3:') !!}
    {!! Form::text('answer_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.questions.index') }}" class="btn btn-default">Đóng</a>
</div>
