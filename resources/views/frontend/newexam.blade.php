@extends('layouts.home')
@section('js')
    <link rel="stylesheet" href="css/style_new.css">
    <link rel="stylesheet" href="css/style_minh.css">
@endsection
@section('content')
<div class="container">
<div class="row">
      <div class="col-lg-12 p-0">
         <div class="col-lg-8 panel_exam">
            <div class="tabcordion">
               <ul id="myTab" class="nav nav-tabs">
                  <li style="width: 516px;" class="active"><a href="">Bạn đang làm đề thi <span style="color:red"> Đề thi thử THPT QG 2019 - Môn Vật Lý - 04</span></a></li>
                  <div style="float: right;line-height: 32px;" class="title_exam c-red f-32 p-0" id="clocker"></div>
               </ul>
               <style>
                  #myTabContent {
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                  cursor: pointer;
                  }
                
                  .iradio_flat-blue.checked ~ span p .math-tex .MathJax{
                     font-weight: bold;
                         
                     .iradio_flat-blue.checked ~ span p 
                     font-weight: bold;
                  }
               /* .minh_test p
                  background-color: #218996;
                border: 2px solid #218996;
                */
               
               </style>
                
               <div id="myTabContent" class="tab-content p-0 " style="height: 485px;overflow-y: scroll;">
                  <div class="col-md-12 col-sm-12 col-xs-12 table-responsive p-0">
                     <table class="table-bordered">
                   
                        <tbody class="no-bd-y">
                                                   <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">1</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Quang phổ vạch phát xạ</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="112" data-idquest="112" data-value="A"> 
                                                 <span name="112" data-idquest="112" data-stt="1" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>do các chất khí ở áp suất thấp phát ra khi bị kích thích</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="112" id="check" data-idquest="112" data-value="B">
                                                 <span name="112" data-idquest="112" data-stt="1" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>là một dải có màu từ đỏ đến tím nổi lên nhau một cách liên tục</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="112" data-idquest="112" data-value="C">
                                                 <span name="112" data-idquest="112" data-stt="1" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>do các chất rắn, lỏng, hoặc khí ở áp suất lớn phát ra khi bị nung nóng</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="112" data-idquest="112" data-value="D">
                                                 <span name="112" data-idquest="112" data-stt="1" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>là một số dải đen trên nền quang phổ liên tục</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">2</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Thực hiện giao thoa sóng ở mặt nước với hai nguồn sóng kết hợp dao động điều hòa cùng pha. Sóng truyền trên mặt nước với bước sóng<span class="math-tex">\( \lambda \)</span>. Cực tiểu giao thoa tại những điểm có hiệu đường đi của hai sóng đó từ nguồn tới điểm đó bằng</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="115" data-idquest="115" data-value="A"> 
                                                 <span name="115" data-idquest="115" data-stt="2" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(k\lambda với k = 0, ±1, ±2,...\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="115" id="check" data-idquest="115" data-value="B">
                                                 <span name="115" data-idquest="115" data-stt="2" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frack\lambda 2\)</span>&nbsp;với <em>k</em> = 0, ±1, ±2,..</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="115" data-idquest="115" data-value="C">
                                                 <span name="115" data-idquest="115" data-stt="2" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\left( k + 0,5 \right)\lambda \)</span>&nbsp;với <em>k</em> = 0, ±1, ±2,...</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="115" data-idquest="115" data-value="D">
                                                 <span name="115" data-idquest="115" data-stt="2" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\left( 2k + 1 \right)\frac\lambda 4\)</span>&nbsp;với <em>k</em> = 0, ±1, ±2,...</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">3</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một con lắc đơn gồm vật nhỏ và sợi dây có chiều dài l đặt tại nơi có gia tốc trọng trường <strong>g</strong>. Khi dao động nhỏ, con lắc dao động điều hòa với chu kì</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="118" data-idquest="118" data-value="A"> 
                                                 <span name="118" data-idquest="118" data-stt="3" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac12\pi \sqrt \fracg\ell  \)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="118" id="check" data-idquest="118" data-value="B">
                                                 <span name="118" data-idquest="118" data-stt="3" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac12\pi \sqrt \frac\ell g \)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="118" data-idquest="118" data-value="C">
                                                 <span name="118" data-idquest="118" data-stt="3" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(2\pi \sqrt \frac\ell g \)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="118" data-idquest="118" data-value="D">
                                                 <span name="118" data-idquest="118" data-stt="3" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(2\pi \sqrt \fracg\ell  \)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">4</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Tia sáng đi từ môi trường có chiết suất <span class="math-tex">\(n_1\)</span> đến mặt phân cách với môi trường có chiết suất <span class="math-tex">\(n_2\)</span> với <span class="math-tex">\(n_1 &gt; n_2\)</span>. Góc giới hạn <span class="math-tex">\(i_gh\)</span> để xảy ra hiện tượng phản xạ toàn phần tại mặt phân cách thỏa mãn</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="121" data-idquest="121" data-value="A"> 
                                                 <span name="121" data-idquest="121" data-stt="4" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\sin i_gh = \frac1n_1n_2\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="121" id="check" data-idquest="121" data-value="B">
                                                 <span name="121" data-idquest="121" data-stt="4" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\sin i_gh = \frac1n_1\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="121" data-idquest="121" data-value="C">
                                                 <span name="121" data-idquest="121" data-stt="4" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\sin i_gh = \frac1n_2\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="121" data-idquest="121" data-value="D">
                                                 <span name="121" data-idquest="121" data-stt="4" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\sin i_gh = \fracn_2n_1\)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">5</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Ba suất điện động xoay chiều phát ra từ một máy phát điện ba pha đang hoạt động, từng đôi một lệch pha nhau</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="123" data-idquest="123" data-value="A"> 
                                                 <span name="123" data-idquest="123" data-stt="5" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac\pi 2\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="123" id="check" data-idquest="123" data-value="B">
                                                 <span name="123" data-idquest="123" data-stt="5" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac2\pi 3\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="123" data-idquest="123" data-value="C">
                                                 <span name="123" data-idquest="123" data-stt="5" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\pi \)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="123" data-idquest="123" data-value="D">
                                                 <span name="123" data-idquest="123" data-stt="5" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac4\pi 3\)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">6</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Sóng cơ hình sin với tần số 5 Hz truyền trên sợi dây với tốc độ 2 m/s. Sóng truyền trên dây với bước sóng</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="124" data-idquest="124" data-value="A"> 
                                                 <span name="124" data-idquest="124" data-stt="6" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,4 m</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="124" id="check" data-idquest="124" data-value="B">
                                                 <span name="124" data-idquest="124" data-stt="6" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>10 m</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="124" data-idquest="124" data-value="C">
                                                 <span name="124" data-idquest="124" data-stt="6" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>2,5 m</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="124" data-idquest="124" data-value="D">
                                                 <span name="124" data-idquest="124" data-stt="6" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,1 m</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">7</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Thí nghiệm giao thoa Y‒ âng với nguồn sáng đơn sắc có bước sóng 600 nm, khoảng cách giữa hai khe hẹp là 1,5 mm và khoảng cách từ mặt phẳng chứa hai khe đến màn quan sát là 2 m. Trên màn quan sát thu được hình ảnh giao thoa với khoảng vân là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="125" data-idquest="125" data-value="A"> 
                                                 <span name="125" data-idquest="125" data-stt="7" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,8 mm</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="125" id="check" data-idquest="125" data-value="B">
                                                 <span name="125" data-idquest="125" data-stt="7" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,4 mm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="125" data-idquest="125" data-value="C">
                                                 <span name="125" data-idquest="125" data-stt="7" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,45 mm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="125" data-idquest="125" data-value="D">
                                                 <span name="125" data-idquest="125" data-stt="7" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,3 mm</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">8</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Trên một sợi dây đang có sóng dừng với khoảng cách giữa hai điểm nút liên tiếp là 20 cm. Sóng truyền trên dây có bước sóng</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="126" data-idquest="126" data-value="A"> 
                                                 <span name="126" data-idquest="126" data-stt="8" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>40 cm</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="126" id="check" data-idquest="126" data-value="B">
                                                 <span name="126" data-idquest="126" data-stt="8" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>10 cm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="126" data-idquest="126" data-value="C">
                                                 <span name="126" data-idquest="126" data-stt="8" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>20 cm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="126" data-idquest="126" data-value="D">
                                                 <span name="126" data-idquest="126" data-stt="8" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>80 cm</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">9</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một bức xạ điện từ có tần số <span class="math-tex">\(10^15\)</span> Hz. Lấy <span class="math-tex">\(c = 3.10^8\)</span> m/s. Bức xạ này thuộc vùng</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="127" data-idquest="127" data-value="A"> 
                                                 <span name="127" data-idquest="127" data-stt="9" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>sóng vô tuyến</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="127" id="check" data-idquest="127" data-value="B">
                                                 <span name="127" data-idquest="127" data-stt="9" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>hồng ngoại</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="127" data-idquest="127" data-value="C">
                                                 <span name="127" data-idquest="127" data-stt="9" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>ánh sáng nhìn thấy</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="127" data-idquest="127" data-value="D">
                                                 <span name="127" data-idquest="127" data-stt="9" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>tử ngoại</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">10</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Trong các kết quả dưới đây, kết quả nào là kết quả chính xác của phép đo gia tốc trọng trường trong một thí nghiệm?</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="128" data-idquest="128" data-value="A"> 
                                                 <span name="128" data-idquest="128" data-stt="10" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>9,82 ± 0,5 m/s2</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="128" id="check" data-idquest="128" data-value="B">
                                                 <span name="128" data-idquest="128" data-stt="10" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>9,825 ± 0,5 m/s2</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="128" data-idquest="128" data-value="C">
                                                 <span name="128" data-idquest="128" data-stt="10" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>9,825 ± 0,05 m/s2</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="128" data-idquest="128" data-value="D">
                                                 <span name="128" data-idquest="128" data-stt="10" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>9,82 ± 0,05 m/s2</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">11</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một con lắc lò xo đang dao động với phương trình <span class="math-tex">\(x = 5\cos \left( 2\pi t + \pi  \right)\)</span>cm. Biết lò xo có độ cứng 10 N/m. Lấy <span class="math-tex">\(\pi ^2 = 10\)</span>. Vật nhỏ có khối lượng là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="129" data-idquest="129" data-value="A"> 
                                                 <span name="129" data-idquest="129" data-stt="11" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>400 g</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="129" id="check" data-idquest="129" data-value="B">
                                                 <span name="129" data-idquest="129" data-stt="11" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>250 g</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="129" data-idquest="129" data-value="C">
                                                 <span name="129" data-idquest="129" data-stt="11" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>125 g</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="129" data-idquest="129" data-value="D">
                                                 <span name="129" data-idquest="129" data-stt="11" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>200 g</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">12</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một ống phát tia <strong>X</strong>&nbsp;đang hoạt động. Electron bứt ra từ catốt (coi như động năng ban đầu bằng không) được gia tốc dưới hiệu điện thế 20 kV đến đập vào anốt. Lấy <span class="math-tex">\(e = 1,6.10^ - 19\)</span>C. Động năng của electron khi đến anốt là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="131" data-idquest="131" data-value="A"> 
                                                 <span name="131" data-idquest="131" data-stt="12" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>3,2.10^‒15 J</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="131" id="check" data-idquest="131" data-value="B">
                                                 <span name="131" data-idquest="131" data-stt="12" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>3,2.10^‒18 J</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="131" data-idquest="131" data-value="C">
                                                 <span name="131" data-idquest="131" data-stt="12" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,25.10^‒15 J</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="131" data-idquest="131" data-value="D">
                                                 <span name="131" data-idquest="131" data-stt="12" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,25.10^‒18 J</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">13</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p><strong>:</strong> Đặt điện áp <span class="math-tex">\(u = 10\cos \left( 100\pi t \right)V (t)\)</span> tính bằng s) vào hai đầu đoạn mạch chỉ có tụ điện với điện dung <span class="math-tex">\(C = \frac2.10^ - 4\pi \)</span> F. Dung kháng của tụ điện có giá trị</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="133" data-idquest="133" data-value="A"> 
                                                 <span name="133" data-idquest="133" data-stt="13" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>200 Ω</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="133" id="check" data-idquest="133" data-value="B">
                                                 <span name="133" data-idquest="133" data-stt="13" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>50 Ω</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="133" data-idquest="133" data-value="C">
                                                 <span name="133" data-idquest="133" data-stt="13" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>100 Ω</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="133" data-idquest="133" data-value="D">
                                                 <span name="133" data-idquest="133" data-stt="13" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>400 Ω</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">14</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một khung dây dẫn có tiết diện 60 cm2 được đặt trong một từ trường đều với cảm ứng từ 5.10^‒3 T. Biết góc hợp bởi vectơ cảm ứng từ và pháp tuyến của mặt phẳng khung dây là 600. Từ không gửi qua khung dây là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="134" data-idquest="134" data-value="A"> 
                                                 <span name="134" data-idquest="134" data-stt="14" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,5.10^‒5 Wb</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="134" id="check" data-idquest="134" data-value="B">
                                                 <span name="134" data-idquest="134" data-stt="14" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,15 Wb</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="134" data-idquest="134" data-value="C">
                                                 <span name="134" data-idquest="134" data-stt="14" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>3.10‒5 Wb</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="134" data-idquest="134" data-value="D">
                                                 <span name="134" data-idquest="134" data-stt="14" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>0,3 Wb</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">15</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một tụ điện phẳng không khí có điện dung là <em>C</em> khi khoảng cách giữa hai bản tụ điện là <em>d</em>. Khi tăng khoảng cách giữa hai bản tụ điện thành 2<em>d</em> thì điện dung của bản tụ điện lúc này là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="135" data-idquest="135" data-value="A"> 
                                                 <span name="135" data-idquest="135" data-stt="15" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(2C\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="135" id="check" data-idquest="135" data-value="B">
                                                 <span name="135" data-idquest="135" data-stt="15" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\fracC4\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="135" data-idquest="135" data-value="C">
                                                 <span name="135" data-idquest="135" data-stt="15" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\fracC2\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="135" data-idquest="135" data-value="D">
                                                 <span name="135" data-idquest="135" data-stt="15" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(4C\)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">16</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Dao động của một vật là tổng hợp của hai dao động điều hòa cùng tần số góc 5 rad/s và vuông pha với nhau. Biết biên độ của hai dao động thành phần lần lượt là 3 cm và 4 cm. Tốc độ cực đại của vật là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="136" data-idquest="136" data-value="A"> 
                                                 <span name="136" data-idquest="136" data-stt="16" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,25 m/s</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="136" id="check" data-idquest="136" data-value="B">
                                                 <span name="136" data-idquest="136" data-stt="16" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>5 cm/s</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="136" data-idquest="136" data-value="C">
                                                 <span name="136" data-idquest="136" data-stt="16" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>25 cm/s</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="136" data-idquest="136" data-value="D">
                                                 <span name="136" data-idquest="136" data-stt="16" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>35 cm/s</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">17</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Vật thật đặt trước một thấu kính hội tụ có tiêu cự 20 cm thì cho ảnh thật lớn hơn vật và cách vật một khoảng 1,25 m. So với kích thước vật, ảnh cao gấp</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="138" data-idquest="138" data-value="A"> 
                                                 <span name="138" data-idquest="138" data-stt="17" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,25 lần</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="138" id="check" data-idquest="138" data-value="B">
                                                 <span name="138" data-idquest="138" data-stt="17" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>5 lầ</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="138" data-idquest="138" data-value="C">
                                                 <span name="138" data-idquest="138" data-stt="17" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>4 lần</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="138" data-idquest="138" data-value="D">
                                                 <span name="138" data-idquest="138" data-stt="17" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>6,25 lần</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">18</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Một sợi dây đàn hồi căng ngang với hai đầu cố định dài 60 cm. Sóng truyền trên dây có tần số 10 Hz và trên dây có sóng dừng với 3 bụng sóng. Tốc độ sóng truyền trên dây là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="140" data-idquest="140" data-value="A"> 
                                                 <span name="140" data-idquest="140" data-stt="18" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>2 m/s</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="140" id="check" data-idquest="140" data-value="B">
                                                 <span name="140" data-idquest="140" data-stt="18" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>4 m/s</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="140" data-idquest="140" data-value="C">
                                                 <span name="140" data-idquest="140" data-stt="18" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>6 m/s</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="140" data-idquest="140" data-value="D">
                                                 <span name="140" data-idquest="140" data-stt="18" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>3 m/s</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">19</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Cho mạch điện như hình vẽ trong đó <span class="math-tex">\(\xi&nbsp; = 6V; r = 1,5Ω; R_1 = 15\)</span>Ω và <span class="math-tex">\(R_2 = 7,5\)</span>Ω. Điện trở của vôn kế V rất lớn. Số chỉ của vôn kế V là</p>

<p>&nbsp;</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="141" data-idquest="141" data-value="A"> 
                                                 <span name="141" data-idquest="141" data-stt="19" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,0 V</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="141" id="check" data-idquest="141" data-value="B">
                                                 <span name="141" data-idquest="141" data-stt="19" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>5,0 V</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="141" data-idquest="141" data-value="C">
                                                 <span name="141" data-idquest="141" data-stt="19" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>4,6 A</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="141" data-idquest="141" data-value="D">
                                                 <span name="141" data-idquest="141" data-stt="19" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>1,4 A</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">20</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Trong không khí, hai dòng điện thẳng dài vô hạn song song với nhau và cách nhau một khoảng 35 cm có cường độ <span class="math-tex">\(I_1 = 8\)</span>A và <span class="math-tex">\(I_2 = 6\)</span>A, cùng chiều. <em>M</em> là điểm mà cảm ứng từ do hai dòng điện gây ra tại đó có độ lớn bằng 0. <em>M</em> cách <span class="math-tex">\(I_1\)</span> và <span class="math-tex">\(I_2\)</span> những khoảng tương ứng là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="142" data-idquest="142" data-value="A"> 
                                                 <span name="142" data-idquest="142" data-stt="20" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>22,4 cm và 12,6 cm</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="142" id="check" data-idquest="142" data-value="B">
                                                 <span name="142" data-idquest="142" data-stt="20" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>15 cm và 20 cm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="142" data-idquest="142" data-value="C">
                                                 <span name="142" data-idquest="142" data-stt="20" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>20 cm và 15 cm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="142" data-idquest="142" data-value="D">
                                                 <span name="142" data-idquest="142" data-stt="20" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>12,6 cm và 22,4 cm</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">21</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Âm cơ bản của nốt La phát ra từ đàn ghita có tần số cơ bản là 440 Hz. Số họa âm của âm La trong vùng âm nghe được (tần số trong khoảng từ 16 Hz đến 20000 Hz) là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="143" data-idquest="143" data-value="A"> 
                                                 <span name="143" data-idquest="143" data-stt="21" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>45</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="143" id="check" data-idquest="143" data-value="B">
                                                 <span name="143" data-idquest="143" data-stt="21" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>44</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="143" data-idquest="143" data-value="C">
                                                 <span name="143" data-idquest="143" data-stt="21" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>46</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="143" data-idquest="143" data-value="D">
                                                 <span name="143" data-idquest="143" data-stt="21" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>43</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">22</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Đặt điện áp <span class="math-tex">\(u = 100\sqrt 2 \cos \left( 100\pi t + \frac\pi 6 \right)\)</span>V vào hai đầu đoạn mạch chỉ có cuộn cảm thuần. Thời gian ngắn nhất giữa hai lần mà từ thông gửi qua cuộn cảm có độ lớn <span class="math-tex">\(\frac\sqrt 2 2\pi \)</span> Wb là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="144" data-idquest="144" data-value="A"> 
                                                 <span name="144" data-idquest="144" data-stt="22" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac1300 s\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="144" id="check" data-idquest="144" data-value="B">
                                                 <span name="144" data-idquest="144" data-stt="22" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac1100 s\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="144" data-idquest="144" data-value="C">
                                                 <span name="144" data-idquest="144" data-stt="22" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac1600 s\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="144" data-idquest="144" data-value="D">
                                                 <span name="144" data-idquest="144" data-stt="22" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(\frac1150 s\)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">23</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Trong thí nghiệm Y‒ âng về giao thoa ánh sáng với nguồn ánh sáng trắng có bước sóng từ 400 nm đến 750 nm. Trên màn quan sát, <em>M</em> là vị trí mà tại đó có đúng 3 bức xạ có bước sóng tương ứng <span class="math-tex">\(\lambda _1, \lambda _2\)</span> và <span class="math-tex">\(\lambda _2 (\lambda _1 &lt; \lambda _2 &lt; \lambda _2)\)</span> cho vân sáng. Trong các giá trị dưới đây, giá trị nào mà <span class="math-tex">\(\lambda _2\)</span><strong>có thể</strong> nhận được?</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="145" data-idquest="145" data-value="A"> 
                                                 <span name="145" data-idquest="145" data-stt="23" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>470 nm</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="145" id="check" data-idquest="145" data-value="B">
                                                 <span name="145" data-idquest="145" data-stt="23" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>510 nm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="145" data-idquest="145" data-value="C">
                                                 <span name="145" data-idquest="145" data-stt="23" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>570 nm</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="145" data-idquest="145" data-value="D">
                                                 <span name="145" data-idquest="145" data-stt="23" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>610 nm</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">24</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Điện năng được truyền tải từ nhà máy phát điện đến nơi tiêu thụ cách xa đó với hiệu suất truyền tải là 80 % nếu điện áp hiệu dụng tại đầu ra máy phát là 2200 V. Coi hệ số công suất trong các mạch điện luôn bằng 1. Nếu tăng điện áp hiệu dụng tại đầu ra ở máy phát lên 4400 V mà công suất tiêu thụ điện không đổi thì hiệu suất truyền tải điện lúc này có giá trị</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="146" data-idquest="146" data-value="A"> 
                                                 <span name="146" data-idquest="146" data-stt="24" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>95,0 %</p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="146" id="check" data-idquest="146" data-value="B">
                                                 <span name="146" data-idquest="146" data-stt="24" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>93,1 %</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="146" data-idquest="146" data-value="C">
                                                 <span name="146" data-idquest="146" data-stt="24" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>95,8 %</p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="146" data-idquest="146" data-value="D">
                                                 <span name="146" data-idquest="146" data-stt="24" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p>90,0 %</p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                      <tr class="" style="">
                              <td class="col-lg-12 p-0">
                                 <div class="col-lg-1 p-5" style="text-align: center;">
                                    <div class="f-w-b m-b-10">
                                       Câu <span class="badge badge-primary sidebar-chart-number f-w-n m-t-5">25</span>
                                       <div class="checked_6639"></div>
                                    </div>                                    
                                 </div>
                                 <div class="col-lg-11 p-0 m-0" style="border-left:1px solid #ddd;">
                                    <p style="text-align: justify;width:100%" class="p-5 p-b-0"> </p><p>Đặt điện áp xoay chiều <span class="math-tex">\(u = 200\cos \left( 100\pi t + \frac\pi 4 \right)\)</span>V vào hai đầu đoạn mạch gồm cuộn cảm thuần có độ tự cảm <strong>\[L\]</strong> thay đổi được, điện trở và tụ điện mắc nối tiếp theo thứ tự. Điều chỉnh <strong>L</strong>&nbsp;thì thấy điện áp dụng giữa hai đầu cuộn cảm đạt giá trị cực đại bằng <span class="math-tex">\(200\sqrt 2\)</span> V. Khi đó, điện áp giữa hai đầu tụ điện có biểu thức là</p><p></p>
                                    <div class="col-lg-12 p-0 p-l-5 m-0 m-b-10">
                                                                               <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                    
                                                                                              <input type="radio" id="check" name="147" data-idquest="147" data-value="A"> 
                                                 <span name="147" data-idquest="147" data-stt="25" data-value="A">A. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(u_C = 100\sqrt 2 \cos 100\pi tV\)</span></p></span> </span>
                                                                                     </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                     
                                                                                                  <input type="radio" name="147" id="check" data-idquest="147" data-value="B">
                                                 <span name="147" data-idquest="147" data-stt="25" data-value="B">B. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(u_C = 100\sqrt 2 \cos \left( 100\pi t - \frac\pi 2 \right)V\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12 "> 
                                                                     
                                                                                                 <input type="radio" id="check" name="147" data-idquest="147" data-value="C">
                                                 <span name="147" data-idquest="147" data-stt="25" data-value="C">C. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(u_C = 300\cos \left( 100\pi t - \frac\pi 2 \right)V\)</span></p></span></span>
                                                                                        </label>
                                       <label id="dapan" class="pos-rel p-0 m-0 p-l-30 m-t-5 col-sm-12">
                                          
                                                                                                 <input type="radio" id="check" name="147" data-idquest="147" data-value="D">
                                                 <span name="147" data-idquest="147" data-stt="25" data-value="D">D. <span style="margin-top: -16px; display: inline-block; margin-bottom: -10px;margin-left: 15px;"><p><span class="math-tex">\(u_C = 300\cos \left( 100\pi t - \frac5\pi 12 \right)V\)</span></p></span></span>
                                                                                        </label>
                                    </div>
                                 </div>
                                 <b>
                                 </b>
                              </td>
                           </tr>
                                                   </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         
         <form method="post" id="chat_form" style="display:block">
            <div class="col-lg-4 panel_exam p-0">
               <div class="panel panel-default m-0 m-t-5 m-b-10" style="display:block">
                  <div class="panel-heading  panel_head_exam">
                     <h3 class="panel-title"><i class="fa fa-sitemap"></i> Xếp hạng thi online</h3>
                  </div>
                  <div class="panel-body p-0 " style="height: 420px;overflow-y: scroll;">
                     <table class="table table-hover p-15">
                        <thead class="header_rank" style="font-family: Arial;font-size: 12px;">
                           <tr>
                              <th style="width: 10px;text-align: center; padding: 0px; padding-top: 2px;padding-bottom: 2px;">STT</th>
                              <th style="padding: 0px; padding-left: 10px; padding-top: 2px;padding-bottom: 2px;text-align: center;">Thành viên</th>
                              <th style="padding: 0px; padding-top: 2px;padding-bottom: 2px;text-align: center;">Tổng lần thi</th>
                              <th style="padding: 0px; padding-top: 2px;padding-bottom: 2px;text-align: center;">Điểm thưởng</th>
                              <th style="text-align: center;padding: 0px; padding-top: 2px;padding-bottom: 2px;">Tổng điểm</th>
                             
                           </tr>
                        </thead>
                        <tbody class="" id="rank_room" style="">
                                                   <tr>
                              <td class=" f-w-b f-w-b" style="text-align: center;"><span class="badge f-w-n badge-info" style="padding-right:5px;padding-left:5px">1</span></td>
                              <td class=" c-blue f-w-b f-w-b" style="padding-left: 3px;">minh</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">99</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">6370</td>
                              <td class=" f-w-b f-w-b" style="text-align: center;">14.8</td>
                            
                           </tr>
                                                      <tr>
                              <td class=" f-w-b f-w-b" style="text-align: center;"><span class="badge f-w-n badge-info" style="padding-right:5px;padding-left:5px">2</span></td>
                              <td class=" c-blue f-w-b f-w-b" style="padding-left: 3px;">huongnguyen</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">21</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">380</td>
                              <td class=" f-w-b f-w-b" style="text-align: center;">6.4</td>
                            
                           </tr>
                                                      <tr>
                              <td class=" f-w-b f-w-b" style="text-align: center;"><span class="badge f-w-n badge-info" style="padding-right:5px;padding-left:5px">3</span></td>
                              <td class=" c-blue f-w-b f-w-b" style="padding-left: 3px;">hoanguyen</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">6</td>
                              <td class=" f-w-b f-w-b c-blue" style="text-align: center;">120</td>
                              <td class=" f-w-b f-w-b" style="text-align: center;">0</td>
                            
                           </tr>
                                                   </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-lg-12 p-0 m-0">
                  <div class="col-lg-7 p-0 m-0 p-r-10" style="float: right;text-align: right;">
                     <a id="send" class="btn btn-success" onclick="confirm_xacnhan()"><i class="fa fa-sign-out"></i> Nạp bài thi</a>
                     <button type="button" class="btn btn-dark p-5 p-l-10 p-r-10 toggle_fullscreen" title="Toàn màn hình"><i class="fa fa-expand"></i></button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   </div>
@endsection