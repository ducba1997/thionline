<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $examDetail->id }}</p>
</div>

<!-- Id Exam Field -->
<div class="form-group">
    {!! Form::label('id_exam', 'Id Exam:') !!}
    <p>{{ $examDetail->id_exam }}</p>
</div>

<!-- Id Level Question Field -->
<div class="form-group">
    {!! Form::label('id_level_question', 'Id Level Question:') !!}
    <p>{{ $examDetail->id_level_question }}</p>
</div>

<!-- Count Field -->
<div class="form-group">
    {!! Form::label('count', 'Count:') !!}
    <p>{{ $examDetail->count }}</p>
</div>

<!-- Percent Field -->
<div class="form-group">
    {!! Form::label('percent', 'Percent:') !!}
    <p>{{ $examDetail->percent }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $examDetail->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $examDetail->updated_at }}</p>
</div>

