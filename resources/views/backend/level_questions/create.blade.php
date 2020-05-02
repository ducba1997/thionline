@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mức độ câu hỏi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.levelQuestions.store']) !!}

                        @include('backend.level_questions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
