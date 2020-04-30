@extends('layouts.home')

@section('title','Cộng đồng ôn tập và luyện thi trực tuyến')
@section('content')
<section class="main">
        <article class="box-index no-head">
            <div class="box-content posrelative">
                <img class="hoavan1" src="upload/hoavan1.png">
                <img class="hoavan2" src="upload/hoavan2.png">
                <div class="container">
                    <div class="col-xs-12 canhgiua ctpt" style="z-index:999;">
                        <h2 class="b-head2">CHƯƠNG TRÌNH PHỔ THÔNG <br>
                            <span class="head2">Đầy đủ bài giảng và bài tập SGK <span class="cred">MIỄN PHÍ</span></span>
                        </h2>
                    </div>
                    <?php $data_grade=App\Model\Grade::all(); ?>
                    <ul class="idxulcl hidden-xs">
                        @foreach($data_grade as $value)
                            <li id="lidata_tieu-hoc"><a href="javascript:void(0);" >{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </article>
        <article class="box-index no-head box-httd">
            <div class="box-content">
                <div class="container">
                    <div class="col-xs-12 canhgiua">
                        <h2 class="b-head2">HỌC TẬP TOÀN DIỆN <br>
                            <span class="head2">Kho đề thi trắc nghiệm Online - Hỏi đáp nhanh chóng - Tư liệu tham khảo</span>
                        </h2>
                    </div>
                    <ul class="ul-httd">
                        <li>
                            <a href="https://hoc247.net/nhom-de-thi-kiem-tra/lop-12">
                                <img src="upload/task.png?id=1">
                                <p class="mau1">1.000+</p>
                                <p>Trắc nghiệm</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://hoc247.net/hoi-dap/lop-12/">
                                <img src="upload/business.png?id=1">
                                <p class="mau1">300K+</p>
                                <p>Hỏi đáp</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://hoc247.net/playlist/lop-12">
                                <img src="upload/video-player.png?id=1">
                                <p class="mau1">1.000+</p>
                                <p>Video</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://hoc247.net/tu-lieu/lop-12">
                                <img src="upload/notebook.png?id=1">
                                <p class="mau1">5.000+</p>
                                <p>Tư liệu</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <article class="box-index _no-head">
            <div class="box-content">
                <div class="container">
                    <div class="col-xs12 canhgiua">
                        <h2 class="b-head">Chương trình đầy đủ - Tư liệu phong phú</h2>
                    </div>
                    <div class="row">
                        <div class="boder2col-index">
                            <div class="col-sm-6 col-xs12">
                                <div class="b-head-cate">
                                    <h3 class="i-title">Chương trình học</h3>
                                </div>
                                <div class="fleft w100per">
                                    <div class="row">
                                        <div class="box-inline-block canhgiua">
                                            <div class="col-inline-block vermid col-lg-4 col-md-3 col-sm-3 col-xs-12 padbot10 canhgiua hidden-xs" id="img-lession-index">
                                                <img src="upload/index-cth.png">
                                            </div>
                                            <div class="col-inline-block vermid col-lg-8 col-md-9 col-sm-9 col-xs-12 padbot10">
                                                <div class="b-content">
                                                    <ul class="list-thaoluan-index" id="list-lession-index" style="overflow: hidden; width: 100%; height: 260px;">
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/vat-ly-12/bai-20-mach-dao-dong-l1071.html">Vật lý 12 Bài 20: Mạch dao động</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 13</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Vật Lý 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/vat-ly-12/bai-29-thuc-hanh-do-buoc-song-anh-sang-bang-phuong-phap-giao-thoa-l1080.html">Vật lý 12 Bài 29: Thực hành Đo bước sóng ánh sáng bằng phương pháp giao thoa</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 0</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Vật Lý 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/cong-nghe-12/bai-19-may-thu-thanh-l6480.html">Công nghệ 12 Bài 19: Máy thu thanh</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Công Nghệ 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/gdcd-12/bai-6-cong-dan-voi-cac-quyen-tu-do-co-ban-l3676.html">GDCD 12 Bài 6: Công dân với các quyền tự do cơ bản</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;GDCD 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/ngu-van-12/vo-chong-a-phu-to-hoai-l3462.html">Vợ chồng A Phủ - Tô Hoài - Ngữ văn 12</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 15</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Ngữ Văn 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tin-hoc-12/bai-7-lien-ket-giua-cac-bang-l6291.html">Tin học 12 Bài 7: Liên kết giữa các bảng</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 13</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tin Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-reading-l5541.html">Unit 10 lớp 12 Reading - Bài dịch Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 15</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/dia-ly-12/bai-22-van-de-phat-trien-nong-nghiep-l2207.html">Địa lí 12 Bài 22: Vấn đề phát triển nông nghiệp</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Địa Lý 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-speaking-l5542.html">Unit 10 lớp 12 Speaking - Hội thoại Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 0</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/hoa-hoc-12/bai-29-luyen-tap-tinh-chat-cua-nhom-va-hop-chat-cua-nhom-l1308.html">Hoá học 12 Bài 29: Luyện tập Tính chất của nhôm và hợp chất của nhôm</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Hóa Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/sinh-hoc-12/bai-35-moi-truong-song-va-cac-nhan-to-sinh-thai-l1676.html">Sinh học 12 Bài 35: Môi trường sống và các nhân tố sinh thái</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Sinh Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-listening-l5543.html">Unit 10 lớp 12 Listening - Bài nghe Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 0</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/ngu-van-12/viet-bai-lam-van-so-5-nghi-luan-van-hoc-l3463.html">Viết bài làm văn số 5: Nghị luận văn học - Ngữ văn 12</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 5</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Ngữ Văn 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tin-hoc-12/bai-10-co-so-du-lieu-quan-he-l6294.html">Tin học 12 Bài 10: Cơ sở dữ liệu quan hệ</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tin Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/dia-ly-12/bai-23-thuc-hanh-phan-tich-su-chuyen-dich-co-cau-nganh-trong-trot-l2208.html">Địa lí 12 Bài 23: Thực hành - Phân tích sự chuyển dịch cơ cấu ngành trồng trọt</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Địa Lý 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-writing-l5544.html">Unit 10 lớp 12 Writing - Bài viết Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 5</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/cong-nghe-12/bai-20-may-thu-hinh-l6481.html">Công nghệ 12 Bài 20: Máy thu hình</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 5</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Công Nghệ 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/hoa-hoc-12/bai-30-thuc-hanh-tinh-chat-cua-natri-magie-nhom-va-hop-chat-cua-chung-l1309.html">Hoá học 12 Bài 30: Thực hành Tính chất của natri, magie, nhôm và hợp chất của chúng</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Hóa Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-language-focus-l5545.html">Unit 10 lớp 12 Language Focus - Ngữ pháp Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/dia-ly-12/bai-24-van-de-phat-trien-nganh-thuy-san-va-lam-nghiep-l2209.html">Địa lí 12 Bài 24: Vấn đề phát triển ngành thủy sản và lâm nghiệp</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Địa Lý 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tieng-anh-12/unit-10-endangered-species-vocabulary-l5546.html">Unit 10 lớp 12 Vocabulary - Từ vựng Endangered Species</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 20</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tiếng Anh 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/toan-12/on-tap-chuong-3-nguyen-ham-tich-phan-va-ung-dung-l6278.html">Toán 12 Ôn tập chương 3 Nguyên hàm, Tích phân và Ứng dụng</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 20</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Toán 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/ngu-van-12/nhan-vat-giao-tiep-l3464.html">Nhân vật giao tiếp - Ngữ văn 12</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 5</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Ngữ Văn 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/sinh-hoc-12/bai-36-quan-the-sinh-vat-va-moi-quan-he-giua-cac-ca-the-trong-quan-the-l1677.html">Sinh học 12 Bài 36: Quần thể sinh vật và mối quan hệ giữa các cá thể trong quần thể</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 10</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Sinh Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a class="i-des" href="https://hoc247.net/tin-hoc-12/bai-tap-va-thuc-hanh-5-lien-ket-giua-cac-bang-l6956.html">Tin học 12 Bài tập và thực hành 5: Liên kết giữa các bảng</a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-comments-o" aria-hidden="true"></i> 5</span>
                                                                <span class="i-cate">|&nbsp;&nbsp;Tin Học 12&nbsp;&nbsp;|</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <script>
                                                        jQuery(function($){
													var hSideTop	= jQuery("#img-lession-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-lession-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs12">
                                <div class="b-head-cate green">
                                    <h3 class="i-title">Tư liệu học tập</h3>
                                </div>
                                <div class="fleft w100per">
                                    <div class="row">
                                        <div class="box-inline-block canhgiua">
                                            <div class="col-inline-block vermid col-lg-4 col-md-3 col-sm-3 col-xs-12 canhgiua hidden-xs" id="img-faq-index">
                                                <img src="upload/index-baitap.png">
                                            </div>
                                            <div class="col-inline-block vermid col-lg-8 col-md-9 col-sm-9 col-xs-12 padbot10">
                                                <div class="b-content">
                                                    <ul class="list-thaoluan-index" id="list-faq-index" style="overflow: hidden; width: 100%; height: 260px;">
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/phuong-phap-giai-cac-bai-toan-lien-quan-den-giao-thoa-voi-anh-sang-hon-hop-mon-vat-ly-12-doc12397.html">
                                                                <p class="i-des">Phương pháp giải các bài toán liên quan đến Giao thoa với ánh sáng hỗn hợp môn Vật lý 12</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 303</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/4-bai-toan-lien-quan-den-hien-tuong-tan-sac-anh-sang-quan-trong-nhat-mon-vat-ly-12-nam-2020-doc12356.html">
                                                                <p class="i-des">4 bài toán liên quan đến hiện tượng Tán sắc ánh sáng quan trọng nhất môn Vật lý 12 năm 2020</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 286</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/dap-an-de-thi-thpt-qg-2019-mon-vat-ly-ma-de-223-doc6230.html">
                                                                <p class="i-des">Đáp án đề thi THPT QG 2019 môn Vật lý mã đề 223</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 3306</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/dap-an-de-thi-thpt-qg-2019-mon-vat-ly-ma-de-222-doc6226.html">
                                                                <p class="i-des">Đáp án đề thi THPT QG 2019 môn Vật lý mã đề 222</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 3009</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/dap-an-de-thi-thpt-qg-2019-mon-vat-ly-tat-ca-cac-ma-de-doc6207.html">
                                                                <p class="i-des">Đáp án đề thi THPT QG 2019 môn Vật lý tất cả các mã đề</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 9153</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/giai-chi-tiet-de-thi-thu-thpt-qg-2019-mon-vat-ly-lan-3-truong-thpt-ngo-quyen-hai-phong-doc5478.html">
                                                                <p class="i-des">Giải chi tiết Đề thi thử THPT QG 2019 môn Vật lý lần 3 trường THPT Ngô Quyền- Hải Phòng</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 2141</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-thu-thpt-qg-nam-2019-mon-tieng-anh-thp-chuyen-dh-su-pham-hn-doc5358.html">
                                                                <p class="i-des">Đề thi thử THPT QG năm 2019 môn Tiếng Anh - THP Chuyên ĐH Sư Phạm HN</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 1677</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-thu-thpt-qg-nam-2019-mon-tieng-anh-thpt-chuyen-bac-giang-lan-1-doc5356.html">
                                                                <p class="i-des">Đề thi thử THPT QG năm 2019 môn Tiếng Anh - THPT Chuyên Bắc Giang lần 1</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 1659</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-thu-thpt-qg-nam-2019-mon-tieng-anh-thpt-thai-phien-hai-phong-doc5278.html">
                                                                <p class="i-des">Đề thi thử THPT QG năm 2019 môn Tiếng Anh - THPT Thái Phiên Hải Phòng</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 1339</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-minh-hoa-thpt-quoc-gia-nam-2019-mon-dia-li-doc5269.html">
                                                                <p class="i-des">Đề thi minh họa THPT Quốc gia năm 2019 môn Địa lí</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 1626</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-minh-hoa-thpt-quoc-gia-nam-2019-mon-lich-su-doc5268.html">
                                                                <p class="i-des">Đề thi minh họa THPT Quốc gia năm 2019 môn Lịch sử</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 2463</span>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <a href="https://hoc247.net/tu-lieu/de-thi-minh-hoa-thpt-quoc-gia-nam-2019-mon-tieng-phap-doc5265.html">
                                                                <p class="i-des">Đề thi minh họa THPT Quốc gia năm 2019 môn tiếng Pháp</p>
                                                            </a>
                                                            <div class="i-tool">
                                                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 2840</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <script>
                                                    jQuery(function($){
													var hSideTop	= jQuery("#img-faq-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-faq-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </article>
        <article class="box-cdtt box-blue">
            <div class="container">
                <div class="wraphead">
                    <div class="headdtda">
                        Đề thi thử <b class="cw">Online</b>
                    </div>
                </div>
                <div class="fleft w100per topslide">
                    <div class="row">
                        <div class="box-inline-block canhgiua">
                            <div class="col-inline-block vermid col-md-12 col-xs-12 padbot10">
                                <div class="b-content">
                                    <ul class="list-thionl-index" id="list-thionl-index" style="overflow: hidden; width: 100%; height: 260px;">
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2019/20190307/470x246/591551924587.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2019 môn GDCD có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2019 môn GDCD có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2019-mon-gdcd-co-loi-giai-chi-tiet-gtid11.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2019 môn GDCD có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 18 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 3812 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/tests/nopic.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2020 môn Vật Lý có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2020 môn Vật Lý có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2020-mon-vat-ly-co-loi-giai-chi-tiet-gtid594.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2020 môn Vật Lý có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 32 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 614 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2019/20191104/470x246/4231572919666.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2020 môn Hóa học có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2020 môn Hóa học có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2020-mon-hoa-hoc-co-loi-giai-chi-tiet-gtid678.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2020 môn Hóa học có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 38 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 185 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2019/20191202/470x246/7131575424615.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2020 môn Địa lý có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2020 môn Địa lý có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2020-mon-dia-ly-co-loi-giai-chi-tiet-gtid694.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2020 môn Địa lý có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 23 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 545 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200104/470x246/5301585302888.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2020 môn Sinh học có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2020 môn Sinh học có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2020-mon-sinh-hoc-co-loi-giai-chi-tiet-gtid728.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2020 môn Sinh học có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 20 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 90 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200210/470x246/1121585303037.jpg" alt="Bộ đề kiểm tra 1 tiết HK2 môn Vật lý lớp 12 năm 2020" title="Bộ đề kiểm tra 1 tiết HK2 môn Vật lý lớp 12 năm 2020">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-kiem-tra-1-tiet-hk2-mon-vat-ly-lop-12-nam-2020-gtid729.html" target="_blank">Bộ đề kiểm tra 1 tiết HK2 môn Vật lý lớp 12 năm 2020</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 28 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 29 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200210/470x246/7741585303236.jpg" alt="Bộ đề kiểm tra 1 tiết HK2 môn Công Nghệ 12 năm 2020" title="Bộ đề kiểm tra 1 tiết HK2 môn Công Nghệ 12 năm 2020">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-kiem-tra-1-tiet-hk2-mon-cong-nghe-12-nam-2020-gtid730.html" target="_blank">Bộ đề kiểm tra 1 tiết HK2 môn Công Nghệ 12 năm 2020</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 2 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 0 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200302/470x246/2131585536450.jpg" alt="Bộ đề thi thử THPT Quốc gia năm 2020 môn Toán có lời giải chi tiết" title="Bộ đề thi thử THPT Quốc gia năm 2020 môn Toán có lời giải chi tiết">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-thi-thu-thpt-quoc-gia-nam-2020-mon-toan-co-loi-giai-chi-tiet-gtid752.html" target="_blank">Bộ đề thi thử THPT Quốc gia năm 2020 môn Toán có lời giải chi tiết</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 7 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 409 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200303/470x246/4981585536636.jpg" alt="Bộ đề kiểm tra 1 tiết HK2 môn Sinh học lớp 12 năm 2020" title="Bộ đề kiểm tra 1 tiết HK2 môn Sinh học lớp 12 năm 2020">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-kiem-tra-1-tiet-hk2-mon-sinh-hoc-lop-12-nam-2020-gtid755.html" target="_blank">Bộ đề kiểm tra 1 tiết HK2 môn Sinh học lớp 12 năm 2020</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 5 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 4 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200303/470x246/1561585536950.jpg" alt="Bộ đề kiểm tra 1 tiết HK2 môn Địa lý lớp 12 năm 2020" title="Bộ đề kiểm tra 1 tiết HK2 môn Địa lý lớp 12 năm 2020">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-kiem-tra-1-tiet-hk2-mon-dia-ly-lop-12-nam-2020-gtid759.html" target="_blank">Bộ đề kiểm tra 1 tiết HK2 môn Địa lý lớp 12 năm 2020</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 2 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 8 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="col-md-2 hidden-xs fleft">
                                                <img onerror="this.src='https://hoc247.net/image/tests/nopic.jpg'" src="https://hoc247.net/image/grouptest/2020/20200401/470x246/7971587110223.jpg" alt="Bộ đề kiểm tra 1 tiết HK2 môn Toán lớp 12 năm 2020" title="Bộ đề kiểm tra 1 tiết HK2 môn Toán lớp 12 năm 2020">
                                            </div>
                                            <div class="col-md-10 col-xs-12 fright">
                                                <a class="i-des" href="https://hoc247.net/bo-de-kiem-tra-1-tiet-hk2-mon-toan-lop-12-nam-2020-gtid764.html" target="_blank">Bộ đề kiểm tra 1 tiết HK2 môn Toán lớp 12 năm 2020</a>
                                                <div class="i-tool">
                                                    <i class="far fa-file-alt marright5"></i> 3 đề &nbsp;
                                                    <i class="far fa-edit marright5"></i> 4 lượt thi
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <script>
                                    jQuery(function($){
													var hSideTop	= jQuery("#img-thionl-index").height();
													var intHeightScroll	= hSideTop;
													//console.log(intHeightScroll);
													if (intHeightScroll < 250)
													{
														intHeightScroll = 260;
													}
													jQuery('#list-thionl-index').slimScroll({
														alwaysVisible: false,
														width: '100%',
														height: intHeightScroll+"px",
														color: '#ccc',
														railOpacity: 1,
														size : "4px",//df: 7px
														distance : "0px",
													});

												});
												</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </article>
    </section>
@endsection
