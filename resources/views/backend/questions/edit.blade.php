@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Question
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($question, ['route' => ['admin.questions.update', $question->id], 'method' => 'patch']) !!}
                @if(Request::get('exam'))
                <div class="form-group col-sm-6 hidden">
                    {!! Form::label('exam', 'Exam:') !!}
                    {!! Form::number('exam', Request::get('exam'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6 hidden">
                    {!! Form::label('id_exam', 'Id Exam:') !!}
                    {!! Form::number('id_exam', Request::get('exam'), ['class' => 'form-control']) !!}
                </div>
                @else
                <?php $valueExam = App\Models\Manage\Exam::all()->pluck('name', 'id');
                ?>
                <div class="form-group col-sm-6">
                    {!! Form::label('id_exam', 'Đề thi:') !!}
                    {!! Form::select('id_exam', $valueExam,null, ['class' => 'form-control']) !!}
                </div>
                @endif
                @include('backend.questions.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection