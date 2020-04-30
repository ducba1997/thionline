@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Chapter
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chapter, ['route' => ['admin.chapters.update', $chapter->id], 'method' => 'patch']) !!}

                        @include('backend.chapters.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection