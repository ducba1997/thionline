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

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Assignment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assignment', 'Assignment:') !!}
    {!! Form::text('assignment', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('admin.lessons.index') }}" class="btn btn-default">Đóng</a>
</div>
