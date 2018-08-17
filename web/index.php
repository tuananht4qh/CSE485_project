<!DOCTYPE html >


<head>
<title>Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<!-- <script type="text/javascript" src="layout/scripts/scripts.js"></script> -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script> 
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>

</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Khóa học online</h2>
        <p>Học online là một hình thức giúp tối ưu thời gian cho các học viên</p>
        <p class="readmore"><a href="#">Tiếp tục đọc &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>Giáo viên đăng nhập</h2>
        <form action="#" method="POST">
          <fieldset>
            <legend>Form đăng nhập giáo viên</legend>
            <label for="teachername">Tài khoản:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Mật khẩu:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Ghi nhớ</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Học viên đăng nhập</h2>
        <form action="login" method="POST">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">Tài khoản:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Mật khẩu:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Ghi nhớ</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Đăng nhập &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">ở đây</a><a id="closeit" style="display: none;" href="#slidepanel">Đóng</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Đại học Thủy Lợi</a></h1>
      <p>Học Trực Tuyến</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Trang chủ</a></li>
        <li><a href="#">Khóa học</a></li>
        <li><a href="#">Thi trắc nghiệm</a></li>
        <li><a href="#">Tin Tức</a></li>
        <li class="dangky"><a href="#">Đăng ký làm học viên</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/lo_trinh.jpg" alt="" /></a>
      <div class="floater">
        <h2>1. KHÓA HỌC TIẾNG ANH CNTT</h2>
        <p>Hanoi-Aptech đã đưa vào giảng dạy giáo trình tiếng Anh chuyên ngành CNTT – ePIT (English for Professional in Information Technology) tập trung vào kỹ năng từ vựng, đọc và viết tài liệu chủ đề CNTT.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/L5-1.png" alt="" /></a>
      <div class="floater">
        <h2>2. KHÓA HỌC LẬP TRÌNH VIÊN FAST-TRACK</h2>
        <p>Khóa học Fast-Track có tên đầy đủ là Lập trình viên Quốc tế Fast-Track. Đây là chương trình đào tạo lập trình viên quốc tế ACCP i17 cập nhật phiên bản 2018 được điều chỉnh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/Banner_laptrinh.java_.png" alt="" /></a>
      <div class="floater">
        <h2>3.KHÓA HỌC LẬP TRÌNH JAVA</h2>
        <p>Khóa học Lập trình Java là chương trình đào tạo chuyên môn các công nghệ dựa trên ngôn ngữ lập trình Java.Chương trình cung cấp cho người học các kiến thức về ngôn ngữ lập trình Java, các tính năng và công nghệ nâng cao như generic, collections api, thread, jdbc, networking,… module JavaEE cung cấp một tập hợp các công nghệ mạnh dùng cho quy mô doanh nghiệp như Servlet, JSP, JSF, EJB, Struts, Spring, Hibernate,…</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/Banner_laptrinh.net_.png" alt="" /></a>
      <div class="floater">
        <h2>4. KHÓA HỌC LẬP TRÌNH .NET</h2>
        <p>Khóa học Lập trình .NET là chương trình đào tạo chuyên môn các công cụ phát triển của Microsoft.Khóa học Lập trình .NET là chương trình đào tạo chuyên môn các công cụ phát triển của Microsoft.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/Banner_php.png" alt="" /></a>
      <div class="floater">
        <h2>5. KHÓA HỌC LẬP TRÌNH PHP</h2>
        <p>Khóa học Lập trình PHP là chương trình đào tạo ngắn hạn chuyên biệt cho ngôn ngữ PHP.Chương trình cung cấp cho người học các kiến thức cơ bản của ngôn ngữ PHP. Sau khi kết thúc khóa học, học viên có đầy đủ kiến thức để có thể bắt đầu tham gia các dự án web PHP đơn giản hoặc có thể tiếp tục tìm hiểu những thành phần nâng cao, các framework của PHP như Laravel hoặc WordPress.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
  </div>
</div>

<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
          <li>
            <h2>Tin Tức</h2>
            <div class="imgholder"><img src="images/23-247x148.jpg" alt="" /></div>
            <p>ThuyLoi Aptech-đồng hành cùng sĩ tử mùa thi 2017- Nhận điểm thi-Cấp ngay Học bổng</p>
            <p>Chỉ còn chưa đầy một tuần nữa thì kỳ thi THPT Quốc gia 2017 sẽ chính thức diễn ra, các thí sinh hiện đang trong giai đoạn nước rút, cố gắng tận dụng từng phút để tự tin bước vào kỳ thi quan trọng của cuộc đời. Chắc hẳn các sĩ tử của chúng ta lúc này đều không thể tránh khỏi cảm giác lo lắng hồi hộp cho kỳ thi đầy cam go và thử thách này. Vậy phải làm thế nào để xua tan lo lắng, Hanoi-Aptech sẽ cùng đồng hành với các bạn trong mùa thi này, với những bí quyết siêu hiệu quả dưới đây.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last">
            <h2>Sự Kiện</h2>
            <div class="imgholder"><img src="images/ava-hna-140325-200x150.png" alt="" /></div>
            <p>Học bổng giảm 25% khóa ACCP nhân ngày thành lập đoàn 26/3 từ tập đoàn Aptech</p>
            <p>Mức giảm trừ lên tới 25% dành cho các bạn nhập học khóa ACCP phiên bản ACCPi13 chỉ trong 1 ngày duy nhất 26/3 là quà tặng đặc biệt đến từ tập đoàn Aptech.

              Theo đó, các bạn dự thi đầu vào và nhập học trong ngày 26/3 sẽ nhận được mực ưu đãi lớn là 25% giá trị học phí toàn khóa ACCP (lập trình viên quốc tế), đây là chương trình được tập đoàn Aptech triển khai trong hệ thống các đơn vị chuyển giao công nghệ đào tạo tại Việt Nam.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        <h2>Giới thiệu giảng viên !</h2>
        <img class="imgl" src="images/a.jpg" alt="" style="width:200px; height:200px;" />
        <p><a href="#">Bùi Thị A </a>	
        <p>Giảng viên
            Chuyên nghành công nghệ thông tin trường Đại học thủy lợi
        </p>
        <p>    abcsss@tlu.edu.vn</p>
        <ol>
          <li>-Lập trình di động</li>
          <li>-Lập trình web</li>
          <li>-Hệ thống phân tán</li>
          
        </ol>
      </div>
    </div>
    <div class="fl_right">
      <h2>Lịch khai giảng/lịch thi</h2>
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="images/NN1_hses2.JPG" alt="" /></a></div>
          <p><strong><a href="#">Lịch thi tháng 7/2018 của trường ThuyLoi-Aptech</a></strong></p>
          <p>Phòng Đào Tạo trường ThuyLoi-Aptech xin gửi tới các bạn học viên lịch thi của tháng 7/2018 như dưới đây.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/NN1_hses2.JPG" alt="" /></a></div>
          <p><strong><a href="#">Lịch thi tháng 7/2018 của trường ThuyLoi-Aptech</a></strong></p>
          <p>Phòng Đào Tạo trường ThuyLoi-Aptech xin gửi tới các bạn học viên lịch thi của tháng 7/2018 như dưới đây.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/IMG_4942-247x148.jpg" alt="" /></a></div>
          <p><strong><a href="#">Lịch thi tháng 7/2018 của trường ThuyLoi-Aptech</a></strong></p>
          <p>Phòng Đào Tạo trường ThuyLoi-Aptech xin gửi tới các bạn học viên lịch thi của tháng 7/2018 như dưới đây.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/kgltv-240x148.jpg" alt="" /></a></div>
          <p><strong><a href="#">ThuyLoi- Aptech Lịch khai giảng lớp mới ACNA–N16ll</a></strong></p>
          <p>Ngày 24/8, trường Hanoi-Aptech đã tổ chức khai giảng khóa mới fast-track T1708I,trong đó một loạt các môn học được thiết kế với định hướng đón đầu cuộc Cách mạng Công nghiệp lần thứ 4 như các công nghệ cloud và big data. Bên cạnh đó, các môn học truyền thống của ngành lập trình cũng được tăng cường và đổi mới</p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images/kgltv-240x148.jpg" alt="" /></a></div>
          <p><strong><a href="#">ThuyLoi-Aptech khai giảng khóa mới tháng 8/2017</a></strong></p>
          <p>Ngày 24/8, trường Hanoi-Aptech đã tổ chức khai giảng khóa mới fast-track T1708I,trong đó một loạt các môn học được thiết kế với định hướng đón đầu cuộc Cách mạng Công nghiệp lần thứ 4 như các công nghệ cloud và big data. Bên cạnh đó, các môn học truyền thống của ngành lập trình cũng được tăng cường và đổi mới</p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col4" style="display:inline-block; " >
  <div id="footer" >
    <P>Thông tin liên hệ</P>
    
      <a href="facebook.com"><span><img src="images/if_social_media_isometric_1-facebook_3529651.png"  style="width: 20px; height: auto; ">Facebook</span></a>
      <a href="linkedin.com"><img src="images/if_social_media_isometric_14-linkedin_3529657.png" style="width: 20px; height: auto;"><span>Linkedin</span></a>
      <a href="youtube.com"><img src="images/if_social_media_isometric_2-youtube_3529652.png" style="width: 20px; height: auto;"><span>Youtube</span></a>
      <a href="twitter.com"><img src="images/if_social_media_isometric_6-twitter_3529664.png" style="width: 20px; height: auto;"><span>Twitter</span></a>
    </ul>   
    <p>Hotline 1: 0898989898
      Email: abc@xyz.vn</p>
  </div>
</div>

<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2018 - Developed by - <a href="https://www.facebook.com/tuananht4qh">Đới Văn Tuấn Anh</a></p>  
    <br class="clear" />
  </div>
</div>
</body>
</html>