@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Result Test Detail
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.resultTestDetails.store']) !!}

                        @include('backend.result_test_details.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
