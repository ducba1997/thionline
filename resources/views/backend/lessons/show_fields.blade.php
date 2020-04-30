<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $lesson->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $lesson->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $lesson->slug }}</p>
</div>

<!-- Id Grade Field -->
<div class="form-group">
    {!! Form::label('id_grade', 'Id Grade:') !!}
    <p>{{ $lesson->id_grade }}</p>
</div>

<!-- Id Subject Field -->
<div class="form-group">
    {!! Form::label('id_subject', 'Id Subject:') !!}
    <p>{{ $lesson->id_subject }}</p>
</div>

<!-- Id Chapter Field -->
<div class="form-group">
    {!! Form::label('id_chapter', 'Id Chapter:') !!}
    <p>{{ $lesson->id_chapter }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $lesson->image }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $lesson->content }}</p>
</div>

<!-- Assignment Field -->
<div class="form-group">
    {!! Form::label('assignment', 'Assignment:') !!}
    <p>{{ $lesson->assignment }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $lesson->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $lesson->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $lesson->updated_at }}</p>
</div>

