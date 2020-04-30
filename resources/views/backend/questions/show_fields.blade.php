<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $question->id }}</p>
</div>

<!-- Id Exam Field -->
<div class="form-group">
    {!! Form::label('id_exam', 'Id Exam:') !!}
    <p>{{ $question->id_exam }}</p>
</div>

<!-- Id Level Question Field -->
<div class="form-group">
    {!! Form::label('id_level_question', 'Id Level Question:') !!}
    <p>{{ $question->id_level_question }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $question->content }}</p>
</div>

<!-- Correct Answer Field -->
<div class="form-group">
    {!! Form::label('correct_answer', 'Correct Answer:') !!}
    <p>{{ $question->correct_answer }}</p>
</div>

<!-- Answer 1 Field -->
<div class="form-group">
    {!! Form::label('answer_1', 'Answer 1:') !!}
    <p>{{ $question->answer_1 }}</p>
</div>

<!-- Answer 2 Field -->
<div class="form-group">
    {!! Form::label('answer_2', 'Answer 2:') !!}
    <p>{{ $question->answer_2 }}</p>
</div>

<!-- Answer 3 Field -->
<div class="form-group">
    {!! Form::label('answer_3', 'Answer 3:') !!}
    <p>{{ $question->answer_3 }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $question->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $question->updated_at }}</p>
</div>

