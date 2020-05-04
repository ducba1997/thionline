<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $assignment->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $assignment->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $assignment->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $assignment->description }}</p>
</div>

<!-- Id Grade Field -->
<div class="form-group">
    {!! Form::label('id_grade', 'Id Grade:') !!}
    <p>{{ $assignment->id_grade }}</p>
</div>

<!-- Id Subject Field -->
<div class="form-group">
    {!! Form::label('id_subject', 'Id Subject:') !!}
    <p>{{ $assignment->id_subject }}</p>
</div>

<!-- Id Chapter Field -->
<div class="form-group">
    {!! Form::label('id_chapter', 'Id Chapter:') !!}
    <p>{{ $assignment->id_chapter }}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $assignment->url }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $assignment->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $assignment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $assignment->updated_at }}</p>
</div>

