@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Level Question
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($levelQuestion, ['route' => ['admin.levelQuestions.update', $levelQuestion->id], 'method' => 'patch']) !!}

                        @include('backend.level_questions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection