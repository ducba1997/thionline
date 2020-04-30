@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Result Test
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($resultTest, ['route' => ['admin.resultTests.update', $resultTest->id], 'method' => 'patch']) !!}

                        @include('backend.result_tests.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection