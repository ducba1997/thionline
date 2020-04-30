<!-- Id Grade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_grade', 'Id Grade:') !!}
    {!! Form::number('id_grade', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_subject', 'Id Subject:') !!}
    {!! Form::number('id_subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Chapter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_chapter', 'Id Chapter:') !!}
    {!! Form::number('id_chapter', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_users', 'Id Users:') !!}
    {!! Form::number('id_users', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Time To Do Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_to_do', 'Time To Do:') !!}
    {!! Form::number('time_to_do', null, ['class' => 'form-control']) !!}
</div>

<!-- Allow Review Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allow_review_answer', 'Allow Review Answer:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('allow_review_answer', 0) !!}
        {!! Form::checkbox('allow_review_answer', '1', null) !!}
    </label>
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.exams.index') }}" class="btn btn-default">Đóng</a>
</div>
