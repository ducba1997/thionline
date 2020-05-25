@extends('layouts.app')
<?php

use App\Model\Assignment;
use App\Model\Lesson;
use App\Models\Manage\Exam;
use App\Models\Manage\ResultTest;
use App\User;
use Charts as C;

$countuser = count(User::all());
$countlesson = count(Lesson::all());
$countexam = count(Exam::all());
$countassignment = count(Assignment::all());
$products = User::all();
$resultest = ResultTest::all();
$dataChart = C::database($products, 'bar', 'highcharts')
    ->title("Thống kê số lượng tài khoản đăng ký năm qua theo tháng")
    ->elementLabel("Tổng tài khoản")
    ->dimensions(1000, 500)
    ->responsive(true)
    ->groupByMonth(date('Y'), true);
$dataChart2 = C::database($resultest, 'line', 'highcharts')
    ->title("Thống kê số lượt thi theo tháng")
    ->elementLabel("Tổng lượt thi")
    ->dimensions(1000, 500)
    ->responsive(true)
    ->groupByMonth(date('Y'), true);
//dd($dataChart);
?>
@section('css')
{!! C::scripts() !!}
{!! $dataChart->script() !!}
@endsection
@section('content')
<section class="content-header">
    <h1>
        Trang tổng quan
    </h1>
</section>
<section class="content">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$countuser}}</h3>

                    <p>Người dùng</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                @if(Auth::user()->id_permission==1)
                <a href="{{ route('admin.users.index') }}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
                @else 
                <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
                @endif
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$countlesson}}</h3>

                    <p>Bài học</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="{{ route('admin.lessons.index') }}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$countexam}}</h3>

                    <p>Đề thi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-newspaper-o"></i>
                </div>
                <a href="{{ route('admin.exams.index') }}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$countassignment}}</h3>

                    <p>Tài liệu</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-word-o"></i>
                </div>
                <a href="{{ route('admin.assignments.index') }}" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thống kê đăng ký</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        {!! $dataChart->render() !!}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thống kê lượt thi</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        {!! $dataChart2->render() !!}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection