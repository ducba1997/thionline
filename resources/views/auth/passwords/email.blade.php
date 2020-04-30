@extends('layouts.home')
@section('title','Quên mật khẩu')
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
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập email hợp lệ"
                },
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
                <p class="title_inside">QUÊN MẬT KHẨU</p>
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
                    <p class="title_login fs20">Quên mật khẩu</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" novalidate="novalidate" name="frmLogin" id="frmLogin" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                        <div class="form frmRegister">
                            <div class="field">
                                <label class="field_L">Địa chỉ Email</label>
                                <input class="text" id="txtEmail" name="email" placeholder="Địa chỉ email" type="text" value="{{old('email')}}">
                                <span class="other_color">*</span>
                                @if ($errors->has('email'))
                                    <label id="txtEmail-error" class="error" for="txtEmail">{{ $errors->first('email') }}</label>
                                @endif
                            </div>
                            
                            <div class="field_btn">

                                <button style="width:100px" class="btn nuthong cw fleft hidden-xs visible-md visible-lg" type="submit">Gửi mail</button>
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