@extends('layouts.home')
@section('title','Đăng nhập')
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
jQuery.validator.setDefaults({
	submitHandler: function() {
		//jQuery('#frmLogin').submit();
		document.getElementById("frmLogin").submit();
	}
});

jQuery(function($){
	jQuery('#frmLogin').validate({
       rules: {
				email: {
					required: true,
					email: true
				},
				password: {
					required: true
				}
			},
			messages: {
				email: {
					required: "Vui lòng nhập email",
					email:"Vui lòng nhập email hợp lệ"
				},
				password: {
					required: "Vui lòng nhập mật khẩu"
				}
			}
    });
});
</script>
@endsection
@section('content')
<div class="main bortop">
    <div id="content" class="container">
        <div id="mainContent" class="box-main-content">
            <div id="leftcontent" class="nopadding">
                <p class="title_inside">ĐĂNG NHẬP</p>
                <div class="columm login_col_4">
                    <p class="title_login canhgiuas fs20">Đăng nhập nhanh bằng tài khoản Facebook</p>
                    <div class="login_other">
                        <a href="{{ url('/auth/redirect/facebook') }}" class="btn_face">&nbsp;</a>
                    </div>
                    <div class="marleft15 martop15">
                        <span>Bạn chưa có tài khoản?&nbsp;&nbsp;</span>
                        <a href="{{route('register')}}" class="link_register">Đăng ký</a>
                    </div>
                </div>
                <div class="columm login_col_8">
                    <p class="title_login fs20">Đăng nhập bằng tài khoản Học Vui</p>
                    <form method="post" novalidate="novalidate" name="frmLogin" id="frmLogin" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="form">
                            <span class="field-validation-valid" data-valmsg-for="IsValidUser" data-valmsg-replace="true"></span>
                            <div class="field">
                                <label class="field_L">Email</label>
                                <input required="" class="text" style="height:40px;" id="txtLoginUsername" name="email" value="{{ old('email') }}" placeholder="Địa chỉ email" type="text"  aria-required="true">
                            </div>
                            <div class="field">
                                <label class="field_L">Mật khẩu</label>
                                <div class="fleft pass">
                                    <input required="" class="text fleft" id="txtLoginPassword" name="password" placeholder="Mật khẩu" type="password" aria-required="true">
                                </div>
                            </div>
                            @if(Session::has('errors'))
                                <div class="field">
                                    <p class="cred">Sai tên tài khoản hoặc mật khẩu</p>
                                </div>
                            @endif
                            <div class="field_btn">
                                <div class="fleft martop5">
                                    <input type="checkbox" class="fxm" name="remember" {{ old('remember') ? 'checked' : '' }}>Nhớ mật khẩu |
                                    <a href="{{URL('/password/reset')}}" title="Em quên mật khẩu?">Quên mật khẩu</a>
                                </div>
                            </div>
                            <div class="field_btn">
                                <button class="btn_blue_sm fleft hidden-xs visible-md visible-lg" type="submit">ĐĂNG NHẬP</button>
                                <button class="btn fleft nuthong cw w100per hidden-md hidden-lg visible-xs" type="submit">ĐĂNG NHẬP</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="clear"></div>

    @endsection