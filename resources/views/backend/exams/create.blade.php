@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Đề thi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.exams.store']) !!}

                        @include('backend.exams.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
