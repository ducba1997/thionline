@extends('layouts.home')
@section('title','Đăng ký tài khoản')
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

        // function getSchoolDisctrict(p_intCity)
        // {
        // 	jQuery.ajax({
        // 	   type: "POST",
        // 	   url: DOMAIN + "account/getschooldistrict",
        // 	   data: {intCity:p_intCity},
        // 	   success: function(data)
        // 		{
        // 			jQuery('#hienthiquan').html(data);
        // 		}
        // 	});
        // }

        // function getSchool(p_intCity, p_strDistrict)
        // {
        // 	jQuery.ajax({
        // 	   type: "POST",
        // 	   url: DOMAIN + "account/getschool",
        // 	   data: {intCity:p_intCity, strDistrict:p_strDistrict},
        // 	   success: function(data)
        // 		{
        // 			jQuery('#loadschool').html(data);
        // 		}
        // 	});
        // }

        /*function checkEmails(strEmail, strObj) {
            if (strEmail != '') {
                jQuery.ajax({
                    type: "POST",
                    url: DOMAIN + "account/checkemailnew",
                    data: {
                        strEmail: strEmail,
                        strObj: strObj
                    },
                    success: function(data) {
                        //alert(data);return false;
                        if (data == 1) {
                            register();
                            //	modalAlert('Bạn đã đăng ký thành công.', "Đăng ký thành công", "", "reload");
                            //window.location.href = window.location.href;
                            return true;
                        } else {
                            modalAlert('Mail bị trùng rồi. Vui lòng sử dụng email khác', "Đăng ký không thành công", "", "reload");
                            //window.location.href = window.location.href;
                            return false;
                        }
                        console.log('dk thanh cong ');
                    }
                });
                // ajax_checkEmails(strEmail,strObj);
            }
        }

    function register() {
        strLastName = trim(jQuery("#txtLastname").val());
        strFirstName = trim(jQuery("#txtFirstname").val());
        strPassword = trim(jQuery("#txtPassword").val());
        strEmail = trim(jQuery("#txtEmail").val());
        //schoolid 		= trim(jQuery("#schoolid").val());
        intClass = jQuery('#txtClass').val();

        strDay = jQuery('#txtDay').val();
        strMonth = jQuery('#txtMonth').val();
        strYear = jQuery('#txtYear').val();
        strBirthDay = strDay + '-' + strMonth + '-' + strYear;
        strCity = jQuery('#txtCity').val();
        intGenger = jQuery('#txtGender').val();
        strAddress = jQuery('#txtAdress').val();
        strPhone = jQuery('#txtPhone').val();

        if (strEmail && strPassword) {
            // ajax_insertMember(strLastName, strFirstName, strPassword, strEmail, strBirthDay, strCity, intGenger, strAddress, strPhone, intClass);
            //	console.log('aaaaaa');
            jQuery.ajax({
                type: "POST",
                url: DOMAIN + "account/insertmembernew",
                data: {
                    strLastName: strLastName,
                    strFirstName: strFirstName,
                    strPassword: strPassword,
                    strEmail: strEmail,
                    strBirthDay: strBirthDay,
                    strCity: strCity,
                    intGenger: intGenger,
                    strAddress: strAddress,
                    strPhone: strPhone,
                    intClass: intClass
                },
                success: function(data) {
                    if (data == 1) {
                        //	window.location.href = 'https://hoc247.net/';
                        modalAlert('Bạn đã đăng ký thành công.', "Đăng ký thành công", "", "https://hoc247.net/");

                        return true;
                    } else {
                        modalAlert('Mail bị trùng . Vui lòng sử dụng email khác', "Đăng ký không thành công", "", "reload");
                        //window.location.href = window.location.href;
                        return false;
                    }
                    console.log('dk thanh cong ');
                }
            });
        }

    }

    jQuery.validator.setDefaults({
        submitHandler: function() {
            strEmail = trim(jQuery("#txtEmail").val());
            checkEmails(strEmail, 'txtEmail');
        }
    });
*/
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
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true
                },
                birthday: {
                    required: true
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
                name: {
                    required: "Vui lòng nhập họ tên"
                },
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập email hợp lệ"
                },
                gender: {
                    required: "Vui lòng nhập Giới tính"
                },
                birthday: {
                    required: "Vui lòng nhập Ngày sinh"
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
                <p class="title_inside">ĐĂNG KÝ TÀI KHOẢN</p>
                <div class="martop15 paddingbot10 borbot">
                    <span>Bạn đã có tài khoản?&nbsp;&nbsp;</span>
                    <a href="https://hoc247.net/tai-khoan/dang-nhap.html" class="link_register">Đăng nhập</a>
                </div>
                <div class="columm login_col_4">
                    <p class="title_login fs20">Đăng ký bằng Facebook (khuyến khích)</p>
                    <div class="login_other">
                        <a href="https://www.facebook.com/v2.2/dialog/oauth?client_id=588204584722693&amp;redirect_uri=https%3A%2F%2Fhoc247.net%2Faccount%2Fregisteropenidfb&amp;state=34cb70ea9224a6245bb180072bd04985&amp;sdk=php-sdk-4.0.15&amp;scope=email" onclick="facebook_login();" class="btn_face">&nbsp;</a>
                    </div>
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
                    <p class="title_login fs20">Đăng ký tài khoản mới</p>
                    <form method="post" novalidate="novalidate" name="frmLogin" id="frmLogin">
                    {{ csrf_field() }}
                        <div class="form frmRegister">
                            <div class="field">
                                <label class="field_L">Email</label>
                                <input class="text" id="txtEmail" name="email" placeholder="Địa chỉ email" type="text" value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <label id="txtEmail-error" class="error" for="txtEmail">Email bạn nhập đã có người đăng ký trên hệ thống</label>
                                @endif
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
                            <div class="field">
                                <label class="field_L">Họ và tên</label>
                                <input class="text" type="text" id="txtName" value="{{old('name')}}" name="name" placeholder="Nhập họ và tên">
                                <span class="other_color">*</span>
                            </div>
                            <div class="field">
                                <label class="field_L">Ngày sinh</label>
                                <input class="text" type="text" id="txtBirthday" value="{{old('birthday')}}" name="birthday" placeholder="Nhập ngày sinh">
                                <span class="other_color">*</span>
                            </div>
                            <div class="field">
                                <label class="field_L">Giới tính</label>
                                <select name="gender" id="txtGender" style="width:140px;">
                                <?php $data_gender=App\Model\Gender::all();  ?>
                                <option value="">Chọn Giới tính</option>
                                @foreach($data_gender as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                                </select>
                                <span class="other_color">*</span>
                            </div>
                            <div class="field">
                                <label class="field_L">Địa chỉ</label>
                                <input class="text" id="txtAdress" name="address" placeholder="Địa chỉ" type="text" value="{{old('address')}}">
                            </div>
                            <div class="field_link">
                                <input type="checkbox" id="chkRight" class="marleft0" name="chkRight" value="1"  {{ old('chkRight') ? 'checked' : '' }}>
                                Tôi đồng ý với các <a target="_blank" href="https://hoc247.net/chinh-sach-bao-mat.html">chính sách</a> và <a target="_blank" href="https://hoc247.net/thoa-thuan-su-dung.html">thỏa thuận sử dụng</a> của Học Vui
                            </div>
                            <div class="field_btn">

                                <button style="width:100px" class="btn nuthong cw fleft hidden-xs visible-md visible-lg" type="submit">ĐĂNG KÝ</button>
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