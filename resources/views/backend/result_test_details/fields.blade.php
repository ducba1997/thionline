<!-- Id Result Test Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_result_test', 'Id Result Test:') !!}
    {!! Form::number('id_result_test', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_question', 'Id Question:') !!}
    {!! Form::number('id_question', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer', 'Answer:') !!}
    {!! Form::text('answer', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.resultTestDetails.index') }}" class="btn btn-default">Đóng</a>
</div>
