<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $resultTestDetail->id }}</p>
</div>

<!-- Id Result Test Field -->
<div class="form-group">
    {!! Form::label('id_result_test', 'Id Result Test:') !!}
    <p>{{ $resultTestDetail->id_result_test }}</p>
</div>

<!-- Id Question Field -->
<div class="form-group">
    {!! Form::label('id_question', 'Id Question:') !!}
    <p>{{ $resultTestDetail->id_question }}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{{ $resultTestDetail->answer }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $resultTestDetail->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $resultTestDetail->updated_at }}</p>
</div>

