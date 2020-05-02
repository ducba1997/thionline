@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.semanticui.min.css">
     <style>
        .mt-1{
            margin-top: 10px;
        }
    </style>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
       var dt= $('.table').DataTable({
            buttons: [
                    {
                        text: "<i class='fa fa-file-pdf-o'></i>&nbspXuất PDF",
                        extend: "pdfHtml5",
                        title: null,
                        messageTop:"Danh sách",
                        className: 'btn btn-danger'
                    },
                    {
                        text: '<i class="fa fa-file-excel-o"></i>&nbspXuất Excel',
                        extend: "excelHtml5",
                        title: null,
                        messageTop:"Danh sách",
                        className: 'btn btn-success'
                    }
                ],
            "dom": '<"pull-right"f>t<"row mt-1" <"col-sm-3" l> <"col-sm-3" B><"col-sm-6" <"pull-right" p>>>',
            "language": {
                "lengthMenu": "Hiển thị _MENU_ trên 1 trang",
                "zeroRecords": "Không tìm thấy nội dung cần tìm",
                "infoEmpty": "Chưa có nội dung",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "sSearch":"Tìm kiếm",
                "oPaginate": {
                    "sFirst": "Đầu", // This is the link to the first page
                    "sPrevious": "Trước", // This is the link to the previous page
                    "sNext": "Tiếp", // This is the link to the next page
                    "sLast": "Cuối" // This is the link to the last page
                },


            }
        });

    });
</script>
@endpush
@section('content')
    
    <div class="panel panel-default" style="margin: 0px 15px 0px 15px">
    <div class="panel-body">
        <section class="content-header">
            <h1 class="pull-left">Môn học</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('admin.subjects.create') }}"><i class="fa fa-fw fa-plus"></i>&nbspThêm mới</a>
        </h1>
        </section>
    </div>
</div>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.subjects.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

