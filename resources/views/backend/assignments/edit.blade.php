@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tài liệu
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($assignment, ['route' => ['admin.assignments.update', $assignment->id], 'method' => 'patch']) !!}

                        @include('backend.assignments.fieldsedit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection