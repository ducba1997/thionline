<?php $valuelevelquestion=App\Models\Manage\LevelQuestion::all()->pluck('name','id'); ?>

<!-- Id Level Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_level_question', 'Mức độ câu hỏi:') !!}
    {!! Form::select('id_level_question',$valuelevelquestion, null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Nội dung:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','id'=>'editorContent']) !!}
</div>

<!-- Correct Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correct_answer', 'Đáp án đúng:') !!}
    {!! Form::textarea('correct_answer', null, ['class' => 'form-control','id'=>'editorCorrectAnswer']) !!}
</div>

<!-- Answer 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_1', 'Đáp án 1:') !!}
    {!! Form::textarea('answer_1', null, ['class' => 'form-control','id'=>'editorAnswer1']) !!}
</div>

<!-- Answer 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_2', 'Đáp án 2:') !!}
    {!! Form::textarea('answer_2', null, ['class' => 'form-control','id'=>'editorAnswer2']) !!}
</div>

<!-- Answer 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_3', 'Đáp án 3:') !!}
    {!! Form::textarea('answer_3', null, ['class' => 'form-control','id'=>'editorAnswer3']) !!}
</div>
@push('scripts')
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('editorContent', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
         } );
        CKEDITOR.replace('editorCorrectAnswer', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
        } );
        CKEDITOR.replace('editorAnswer1', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
        } );
        CKEDITOR.replace('editorAnswer2', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
        } );
        CKEDITOR.replace('editorAnswer3', {
            filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
        } );
    </script>
    @include('ckfinder::setup')
@endpush
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lưu', ['class' => 'btn btn-primary']) !!}
    @if(Request::get('exam'))
    <a href="{{ route('admin.questions.index') }}?exam={{Request::get('exam')}}" class="btn btn-default">Đóng</a>
    @else
    <a href="{{ route('admin.questions.index') }}" class="btn btn-default">Đóng</a>
    @endif
</div>
