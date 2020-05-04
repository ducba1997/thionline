<html lang="vi-VN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title')</title>
    <meta name="Keywords" content="video, bài giảng, trắc nghiệm, thcs, tiểu học, thpt, bài tập, sgk, sách giáo khoa, nâng cao, hỏi đáp, luyện tập">
    <meta name="Description" content="HOCVUI cung cấp bài giảng, trắc nghiệm tất cả các bài học trong SGK miễn phí và hệ thống hỏi đáp để kết nối cộng đồng Học sinh và Giáo viên cả nước">
    <link type="image/x-icon" href="upload/favicon.ico" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{URL('/')}}/">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <script src="js/jquery-1.10.1.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <link rel="stylesheet" href="{{asset('css/pace.min.css')}}">
    <script src="{{asset('js/pace.min.js')}}"></script>
    <script type="text/javascript">
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function() {
            Pace.restart()
        })
    </script>
    @yield('css')
    <!-- <link rel="stylesheet" href="css/fontawesome.5.2.0/css/all.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <script src="https://use.fontawesome.com/f455f83be3.js"></script> -->
    <base href="{{URL('public')}}">
    <link href="css/bootstrap.min.css" type="text/css" media="all" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" type="text/css" media="all" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/general.css" type="text/css" media="all" rel="stylesheet">
    <link href="css/style.css" type="text/css" media="all" rel="stylesheet">
    <link href="css/plv.css" type="text/css" media="all" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>
    <!-- <script src="js/jwplayer/jwplayer.js?id=1.001"></script>
		<script language="javascript" type="text/javascript">
		jwplayer.key="5qMQ1qMprX8KZ79H695ZPnH4X4zDHiI0rCXt1g==";
		</script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML"></script>
</head>

<body style="">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=222066899212087&autoLogAppEvents=1"></script>
    <header id="header" style="z-index:1000;" data="computer">
        <div class="wrapheader mauhead">
            <div class="container" style=" height: 45px;">
                <div class="logo">
                    <a href="{{URL('/')}}">
                        <img class="i_logo" alt="Hoc Vui" src="upload/hoc247_logo.png">
                    </a>
                </div>
                <div id="menucate-pc" class="menu-right visible-md visible-lg hidden-xs">
                    <a href="javascript:void(0);" id="nav-toggle" class="nav-toggle">Menu<span></span></a>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <ul class="navigation-menu">
                            <li class="menu ">
                                <a href="{{URL('/chuong-trinh/')}}">Chương Trình</a>
                            </li>
                            <li class="menu ">
                                <a href="{{URL('/de-thi/')}}">Đề thi</a>
                            </li>
                            <li class="menu ">
                                <a href="" onclick="return false;">Hỏi Đáp</a>
                            </li>
                            <li class="menu ">
                                <a href="{{URL('/tai-lieu/')}}">Tư Liệu</a>
                            </li>
                            <li class="menu ">
                                <a href="" onclick="return false">VIDEO</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @if(Auth::check())
                    <div class="menu-login is-login .is-badge">
                        <a class="login" href="javascript:void();" title="{{Auth::user()->name}}">
                            <span>Hi, {{Auth::user()->name}}</span>
                        </a>
                        <div class="box-subulmenu">
                            <ul class="subulmenu">
                                <li class="item borbot hidden">
                                    <a href="javascript:void()">
                                        <span class="i-icon">
                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="i-name">Thông báo</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://hoc247.net/thong-tin-ca-nhan/">
                                        <span class="i-icon">
                                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="i-name">Thông tin cá nhân</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://hoc247.net/thong-tin-tai-khoan/">
                                        <span class="i-icon">
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                        </span>
                                        <span class="i-name">Thông tin tài khoản</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span class="i-icon">
                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        </span>
                                        <span class="i-name">Thoát</span>
                                    </a>
                                </li>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                            {{csrf_field()}}                                  
                                </form>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="menu-login">
                        <a class="login btn-warning" href="{{route('login')}}">
                            <i class="fas fa-user"></i> Đăng nhập </a>
                    </div>
                @endif
            </div>
        </div>
        <div id="subheader" class="subheader">
            <div class="container" style="height: 40px;">
                <div class="row">
                    <div style="position:absolute;left:10%;" class="fleft col-lg-2 col-md-2 col-sm-5 col-xs-12 hidden-sm">
                        <div class="row padtop5">
                        </div>
                    </div>
                    <div class="fright col-lg-10 col-md-10 col-sm-12 col-xs-12 sub-menu-top">
                        <div class="box-search">
                            <div class="input-search" style="margin-top: 6px;">
                                <input type="hidden" id="txtModuleSearch" name="txtModuleSearch" value="">
                                <input value="" onkeydown="if(event.keyCode==13){doSearch('txtSearch','txtModuleSearch');return false;}" autocomplete="off" class="" type="text" id="txtSearch" name="txtSearch" placeholder="Tìm">
                                <span class="box-icon" href="javascript:void(0);" onclick="doSearch('txtSearch','txtModuleSearch');"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <!-- submenu chuong trinh -->
                        <?php $data_grade=App\Model\Grade::all(); ?>
                        <ul class="tlmenu" data-parent="chuong-trinh">
                            @foreach($data_grade as $value)
                            <li class="">
                                <a href="@yield('submenu')/{{$value->slug}}">{{$value->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- END submenu chuong trinh -->
                        <div class="btnrank"><a href="https://hoc247.net/tin-tuc/danh-sach-nhan-thuong-theo-tuan"><i class="fas fa-star"></i> BXH Tuần/Tháng</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        /* link content */
        .idxulcl {
            float: left;
            width: 100%;
            margin-bottom: 30px;
        }

        .idxulcl li {
            float: left;
            list-style: none;
            display: inline;
            padding: 5px;
            width: 10%;
            border: 1px solid #ececec;
            margin-right: 10px;
            text-align: center;
        }

        .idxulcl li:hover,
        .idxulcl li.active {
            background: #0482e2;
            color: #fff;
        }

        .idxulcl li:hover a,
        .idxulcl li.active a {
            color: #fff;
        }

        .idxulcl li:last-child {
            margin-right: 0px;
        }

        .contlink .col-md-4 {
            padding: 0px 5px;
            min-height: 160px;
        }

        .contlink {
            background: #fff;
            padding: 15px 0px 30px 0px;
        }

        .contlink h3 {
            font-size: 16px;
            margin: 10px 0px;
            float: left;
            width: 100%;
        }

        .contlink h4 {
            font-size: 14px;
            font-weight: 500;
            color: #0482e2;
        }

        .contlink h4:before {
            content: "\25A0";
            color: #0482e2;
            width: 2px;
            height: 2px;
            margin-right: 5px;
            margin-left: -12px;
            font-size: 9px;
        }

        .contlink p {
            font-size: 13px;
            margin-bottom: 2px;
        }

        .contlink p a {
            color: #000;
        }

        .contlink .h4m {
            font-size: 16px;
            font-weight: 500;
            border-bottom: 1px solid #e2e2e2;
            padding-bottom: 5px;
            line-height: 25px;
            padding-top: 5px;
        }

        .contlink .muiten {
            float: right;
            font-size: 16px;
            color: #000;
        }

        .contlink .pmo {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .contlinkm h4 {
            margin-left: 10px;
        }

        /* !link content */

        .box-footer-top .menu-ft-50 {
            width: 100%;
        }

        .menu-ft li {
            width: 30%;
        }

        #camera_wrap_mobi {
            height: 140px !important;
            margin-bottom: 0px !important;
        }

        #camera_wrap_mobi .cameraSlide {
            margin-top: 9px !important;
        }

        .list-thionl-index li {
            width: 50%;
            min-height: 65px;
        }

        .list-thionl-index li .i-des:hover {
            font-size: 15px;
        }

        @media(max-width:567px) {

            .box-index .b-head,
            .box-cdtt .headdtda {
                font-size: 18px;
            }

            .box-congdong {
                background: url('upload/bg2.jpg?id=1.001') repeat top center;
            }

            .ulcd li.act,
            .ulcd li:hover {
                background: none;
            }

            .box-index .b-head2 {
                margin-bottom: 0px;
            }
        }
    </style>
    @yield('content')
    <img id="break_300x60" src="upload/blank.gif" width="1px" height="1px">
    <footer id="boxfooter" class="mauhead">
        <div class="container">
            <div class="row">
                <div class="box-footer-top">
                    <div class="hidden-xs marbot30">
                        <div class="b-col col-lg-3 col-md-3 col-sm-2 col-xs-6 vertop b-img" style="padding-top:0px;">
                            <img src="upload/hoc247_logo.png" id="logo_footer">
                        </div>
                    </div>
                    <div class="b-col col-lg-12 col-md-12 col-sm-12 hidden-xs">
                        <div class="row">
                            <div class="box-inline-block">
                                <div class="col-inline-block col-sm-5">
                                    <ul class="menu-ft menu-ft-50">
                                        @foreach($data_grade as $value)
                                            <li>
                                                <a href="{{URL('/chuong-trinh')}}/{{$value->slug}}">{{$value->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-inline-block col-sm-3">
                                    <p><b>Kết nối với chúng tôi</b></p>
                                    <div class="box-inline-block">
                                        <span class="col-inline-block col-xs-2 pad5 canhgiua">
                                            <a href="https://www.facebook.com/ducba97" target="_blank" rel="nofollow"><img src="upload/i-fb.png"></a>
                                        </span>
                                        <span class="col-inline-block col-xs-2 pad5 canhgiua">
                                            <a href="https://www.youtube.com/channel/UC1ngRQm9fW4l2gd2f0TogBw?sub_confirmation=1" target="_blank" rel="nofollow"><img src="upload/i-youtube.png"></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-inline-block col-sm-4">
                                    <p><b>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</b></p>
                                    <a target="ioshoc247" href="#"><img src="upload/appstore1.png"></a>
                                    <a target="androidhoc247" href="#"><img src="upload/googleplay1.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer-top hidden-xs">
                <div class="b-col col-lg-3 vertop">
                    <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=28358" target="_blank"><img src="upload/bocongthuong.png"></a>
                </div>
                <div class="b-col col-lg-9 vertop">
                    <div class="b-col col-lg-4 vertop fw300">
                        <p>Hotline: 097 195 2767</p>
                        <p>Thứ 2 - thứ 7: từ 08h30 - 21h00</p>
                        <p>Email: cunghocvui2020@gmail.com</p>
                    </div>
                    <div class="b-col col-lg-8 vertop fw300">
                        <p>Copyright © {{Carbon\Carbon::now()->year}} Hocvui.com</p>
                        <p>Đơn vị chủ quản: Công Ty Cổ Phần Giáo Dục HỌC VUI</p>
                        <p>Địa chỉ: Xóm 10, xã Nghi Kim, TP. Vinh, Nghệ An</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <p class="mauhead" style="min-height:90px;width:100%;float:left;">&nbsp;</p>
    
    
    @yield('js')
</body>

</html>