@extends('layouts.home')
@section('title','Đổi mật khẩu')
@section('css')
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<link href="css/account.css" type="text/css" media="all" rel="stylesheet">
<style>
    .menu-ft li {
        width: 30%;
    }

    .box-footer-top .menu-ft-50 {
        width: 100%;
    }

    .contlink a:hover {
        text-decoration: underline;
    }
</style>
@endsection
@section('js')
<script>

    jQuery().ready(function() {
        jQuery('#frmLogin').validate({
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                },
                password_confirmation: {
                    required: true,
                    minlength: 6,
                    equalTo: "#txtPassword"
                },
                email: {
                    required: true,
                    email: true
                },
            },
            messages: {
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu phải có ít nhất 6 ký tự"
                },
                password_confirmation: {
                    required: "Vui lòng nhập lại mật khẩu",
                    minlength: "Mật khẩu phải có ít nhất 6 ký tự",
                    equalTo: "Mật khẩu đã nhập không khớp"
                },
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập email hợp lệ"
                }
            }
        });
    });
</script>
</script>
@endsection
@section('content')
<div class="main bortop">
    <div id="content" class="container">
        <div id="mainContent" class="box-main-content">
            <div id="leftcontent" class="pad10 paddingtop10">
                <p class="title_inside">ĐỔI MẬT KHẨU</p>
                <div class="columm login_col_4">
                    
                    <h3 class="martop20 paddingleft20 fs18 mobiehidden hidden-xs visible-md visible-lg">TRẢI NGHIỆM CÙNG HỌC VUI</h3>
                    <ul class="msgdk mobiehidden hidden-xs visible-md visible-lg">
                        <li>
                            <span class="sprite dk1 fleft"></span>
                            <p class="msgcont">Hệ thống học tập chuyên nghiệp, có chức năng làm bài tập giúp đánh giá tiến trình học tập của mình.</p>
                        </li>
                        <li>
                            <span class="sprite dk3 fleft"></span>
                            <p class="msgcont">Giúp học sinh tiết kiệm thời gian, chi phí nhằm trang bị những kiến thức, kỹ năng chuyên nghiệp, phục vụ tốt trong công việc.</p>
                        </li>
                        <li>
                            <span class="sprite dk4 fleft"></span>
                            <p class="msgcont">Giúp học sinh chủ động hơn trong việc học tập của mình, học mọi lúc, mọi nơi.</p>
                        </li>
                    </ul>
                </div>
                <div class="columm login_col_8">
                    <p class="title_login fs20">Đổi mật khẩu</p>
                    <form method="post" novalidate="novalidate" name="frmLogin" id="frmLogin" action="{{ route('password.update') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form frmRegister">
                            <div class="field">
                                <label class="field_L">Email</label>
                                <input class="text" id="txtEmail" name="email" placeholder="Địa chỉ email" type="text" value="{{old('email')}}">                         
                                <span class="other_color">*</span>
                            </div>
                            <div class="field">
                                <label class="field_L">Mật khẩu</label>
                                <input class="text" id="txtPassword" name="password" placeholder="Mật khẩu" type="password">
                                <span class="other_color">*</span>
                            </div>
                            <div class="field">
                                <label class="field_L">Nhập lại Mật khẩu</label>
                                <input class="text" id="txtPasswordConfirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password">
                                <span class="other_color">*</span>
                            </div>
                            <div class="field_btn">

                                <button style="width:140px" class="btn nuthong cw fleft hidden-xs visible-md visible-lg" type="submit"> ĐỔI MẬT KHẨU</button>
                                <button class="btn fleft nuthong cw w100per hidden-md hidden-lg visible-xs" type="submit">ĐĂNG KÝ</button>

                                <!--<a href="tai-khoan/dang-nhap.html" class="link_register">Đã đăng ký?</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="clear"></div>

    @endsection