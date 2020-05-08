@extends('layouts.home')
@section('submenu')
{{URL('/chuong-trinh')}}
@endsection
@section('css')
<link rel="stylesheet" href="css/myhocvien.css">
@endsection
@section('title')
Thông tin cá nhân
@endsection
@section('content')
<section class="wrapbanner">
    <div class="container">
        <h1 class="cate-h1">Thông tin cá nhân</h1>
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
                            <li class="item-2 act" data-code="info">
                                <a href="{{route('profile.infoprofile')}}">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> Thông tin cá nhân
                                </a>
                            </li>
                            <li class="item-2 " data-code="historyfaq">
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
                    <div class="box-profile-info myright">
                        <h1 class="fleft marbot10">THÔNG TIN CÁ NHÂN</h1>
                        <form id="frmProfile" name="frmProfile" action="{{route('profile.update.info')}}" class="frm_edit_info" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="contgv">
                                <div id="thongtinchung">
                                    <div class="avagv">
                                        <a href="javascript:void(0);">
                                            <img onerror="this.src='upload/userprofile1.png'" alt="Anh Quân AP" style="width: 200px;height: 200px !important;" src="upload/avatar/{{Auth::user()->avatar}}">
                                        </a>
                                        <div class="cname fw600 marbot10">{{Auth::user()->name}}</div>

                                        <div class="main bgw" style="margin-bottom:0px;margin-top:10px;padding:0px 10px;">
                                            <div class="row" style="padding-top:10px;">
                                                <div class="col-xs-12">
                                                    <div id="msgBox" style="font-size: 15px; padding: 10px; color: rgb(217, 83, 79);"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="clear"></div>
                                    <div class="ptitlegv">Thông tin cá nhân</div>

                                    <div class="edi_row fleft w100per">
                                        <label class="lbl fleft">Ảnh avatar</label>
                                        <input type="file" id="avatar" name="avatar" accept=".png, .jpg, .jpeg">
                                    </div>

                                    <div class="edi_row fleft w100per">
                                        <label class="lbl fleft">Họ tên</label><input type="text" id="member_lastname" name="name" value="{{Auth::user()->name}}">
                                        <label id="member_lastname-error" style="float:none;" class="error" for="txtName">*</label>
                                    </div>
                                    <div class="edi_row fleft w100per">
                                        <label class="lbl fleft">Địa chỉ</label><input type="text" id="member_firstname" name="address" value="{{Auth::user()->address}}">
                                        <label id="member_firstname-error" style="float:none;" class="error" for="txtAddress">*</label>
                                    </div>
                                    <div class="edi_row fleft w100per">
                                        <label class="lbl fleft">Giới tính</label>
                                        <?php $genderItems = App\Model\Gender::all() ?>
                                        @foreach($genderItems as $value)
                                        <label><input type="radio" name="id_gender" value="{{$value->id}}" {{$value->id==Auth::user()->id_gender ? "checked" : ""}}> {{$value->name}}</label>
                                        @endforeach
                                    </div>
                                    <div class="edi_row fleft w100per">
                                        <label class="lbl fleft">Ngày sinh</label>
                                        <input type="text" value="{{Auth::user()->birthday}}" class="txtBox" name="birthday" id="txtBirthday">
                                        <button class="btn_blue_sm marleft42per" type="submit" style="width:150px;">Lưu thông tin</button>
                        </form>
                        <div class="spaceline"></div>
                        <div class="ptitlegv">Thông tin đăng nhập</div>
                        <form novalidate="novalidate" action="{{route('profile.update.password')}}" id="frmPassword" name="frmPassword" class="frm_edit_info" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf    
                        <div class="edi_row fleft w100per">
                                <label class="lbl fleft">Tên đăng nhập</label><input class="maxwidth" readonly="readonly" type="text" value="{{Auth::user()->email}}">
                            </div>
                            <div class="edi_row fleft w100per">
                                <label class="lbl fleft">&nbsp;</label><input class="edi_text maxwidth" type="password" id="password" name="password" placeholder="Mật khẩu mới" value=""><span class="error" style="float:none">*</span>
                            </div>
                            <div class="edi_row fleft w100per">
                                <label class="lbl fleft">&nbsp;</label><input class="edi_text maxwidth" type="password" id="renewpass" name="renewpass" placeholder="Nhập lại mật khẩu mới" value=""><span class="error" style="float:none">*</span>
                            </div>
                            <button class="btn_blue_sm marleft42per" type="submit" style="width:150px;">Lưu mật khẩu mới</button>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                

            </div>

            <script type="text/javascript" src="js/check_value_input.js"></script>
            <script type="text/javascript" src="js/jquery.validate.min.js"></script>
            <script>
                jQuery().ready(function (){
                    jQuery('#frmPassword').validate({
                        rules: {
                            password: {
                                required: true,
                                minlength: 6,
                            },
                            renewpass: {
                                required: true,
                                minlength: 6,
                                equalTo: "#password"
                            }
                        },
                        messages: {
                            password: {
                                required: "Vui lòng nhập mật khẩu mới",
                                minlength: "Mật khẩu phải có ít nhất 6 ký tự"
                            },
                            renewpass: {
                                required: "Vui lòng nhập lại mật khẩu mới",
                                minlength: "Mật khẩu phải có ít nhất 6 ký tự",
                                equalTo: "Mật khẩu bạn nhập không khớp"
                            }
                        }
                    });
                });
            </script>
        </div>
        </div>

        </div>
    </article>
</section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
    jQuery('#birthday').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    })
</script>
@endsection