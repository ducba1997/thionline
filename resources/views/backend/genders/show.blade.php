@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Giới tính
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('backend.genders.show_fields')
                    <a href="{{ route('admin.genders.index') }}" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i>Trở về</a>
                </div>
            </div>
        </div>
    </div>
@endsection
