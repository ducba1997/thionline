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

<!-- Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count', 'Count:') !!}
    {!! Form::number('count', null, ['class' => 'form-control']) !!}
</div>

<!-- Percent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percent', 'Percent:') !!}
    {!! Form::number('percent', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.examDetails.index') }}" class="btn btn-default">Đóng</a>
</div>
