@extends('layouts.app')

@section('content')
    <section class="content-header">
        @if(Request::get('exam'))
           <?php $valueExam=\App\Models\Manage\Exam::where('id',Request::get('exam'))->first(); ?>
              <h1 >{{$valueExam->name}}</h1>
        @else
            <h1>Đề thi chi tiết</h1>
        @endif
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($examDetail, ['route' => ['admin.examDetails.update', $examDetail->id], 'method' => 'patch']) !!}

                        @include('backend.exam_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection