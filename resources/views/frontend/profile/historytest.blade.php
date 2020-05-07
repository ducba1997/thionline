@extends('layouts.home')
@section('title','Lịch sử thi')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.semanticui.min.css">
<style>
    .mt-1 {
        margin-top: 10px;
    }
</style>
@endsection
@section('js')

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
jQuery(document).ready(function(){
  jQuery('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
    $(document).ready(function() {
        var dt = $('#table').DataTable({
            "dom": '<"pull-left">t<"row mt-1" <"col-sm-5" ><"col-sm-6" p<"pull-right" >>>',
            "language": {
                "lengthMenu": "Hiển thị _MENU_ trên 1 trang",
                "zeroRecords": "Không tìm thấy nội dung cần tìm",
                "infoEmpty": "Chưa có nội dung",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "sSearch": "Tìm kiếm",
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
@endsection
@section('content')
<?php $itemResultest = \App\Models\Manage\ResultTest::where('id_user', Auth::user()->id)->get() ?>
<section class="wrapbanner">
    <div class="container">
        <h1 class="cate-h1">Lịch sử thi</h1>
    </div>
</section>
<section class="main">
    <article class="box-cate search-filter left-collapse">
        <div class="container">
            <div class="cate-col-left ">
                <div class="box-scroll-left">
                    <div class="scroll-left" id="scroll-left" style="top: 0px;">
                        <h3 class="cate-title">Trang thông tin</h3>
                        <ul class="list-cate">
                            <li class="item-2" data-code="info">
                                <a href="{{route('profile.infoprofile')}}">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> Thông tin cá nhân
                                </a>
                            </li>
                            <li class="item-2 act" data-code="historyfaq">
                                <a href="{{route('profile.history.exam')}}">
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i> Lịch sử thi
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cate-col-right">

                <div class="list-content-type1">
                    <div class="tttk col-md-6 colx-xs-12 canhgiua">
                        <a target="myacc" href="" onclick="return false;">
                            <img onerror="this.src='upload/userprofile1.png'" style="width: 200px; height: 200px !important;border-radius: 50%; border: 2px solid #b9b7b7; padding: 3px;" alt="{{Auth::user()->name}}" width="200px" height="200px" src="upload/avatar/{{Auth::user()->avatar}}">
                        </a>
                    </div>
                    <div class="col-md-6 colx-xs-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="border: none">Tên tài khoản</td>
                                    <td style="border: none">{{Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <td style="border: none">Ngày sinh</td>
                                    <td style="border: none">{{Auth::user()->birthday}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="clear">&nbsp;</p>

                    <table class="table" id="table">
                        <thead>
                            <tr class="bgw">
                                <th class="canhgiua">STT</th>
                                <th class="canhgiua">Đề thi</th>
                                <th class="canhgiua">T.gian làm</th>
                                <th class="canhgiua">Điểm</th>
                                <th class="canhgiua">Hành động</th>
                            </tr>
                        </thead><?php $stt=0; ?>
                        <tbody>
                            @foreach($itemResultest as $value)
                            <tr class="canhgiua">
                                <td>{{++$stt}}</td>
                                <td data-toggle="tooltip" title="{{$value->idExam->name}}"><?php echo substr($value->idExam->name,0,60) ."..."?></td>
                                <td>
                                    @if(gmdate("i", $value->time_to_do)!="00")
                                    {{gmdate("i", $value->time_to_do)." p "}}
                                    @endif 
                                    @if($value->time_to_do%60!=0)
                                        {{ gmdate("s", $value->time_to_do)." s"}}
                                    @endif</td>
                                <td>{{$value->point}}</td>
                                <td>
                                    @if($value->idExam->allow_review_answer==1)
                                        <a style="color: #4183c4;"  target="_bkank" href="{{route('exam.review',$value->id)}}">Xem lại</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

           
        </div>
        </div>

        </div>
    </article>
</section>


@endsection