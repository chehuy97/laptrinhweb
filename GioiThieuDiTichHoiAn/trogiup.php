<!DOCTYPE html>
<html>
<head>
	<title>Phố Cổ Hội An</title>
	<link rel="shortcut icon" href="image/logohoian.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="hoian.css">
</head>
<body style="background: url(image/hoian5.jpg);">
	<div>
	<nav class="navbar navbar-inverse sidebar_nav">
  	<ul class="nav navbar-nav">
    	<li><a href="WebsiteHoiAn.php" class="sidebar_li"><b>Trang Chủ</b></a></li>
    	<li><a href="gioithieu.php" class="sidebar_li"><b>Giới Thiệu</b></a></li>
    	<li><a href="dulich.php" class="sidebar_li"><b>Du Lịch</b></a></li>
    	<li><a href="bando.php" class="sidebar_li"><b>Bản Đồ</b></a></li>
    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Bảng Giá</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="banggia.php">Bảng Giá</a></li>
          <li><a href="timkiem.php">Tìm Kiếm</a></li>
        </ul>
      </li>
    	<li><a href="trogiup.php" class="sidebar_li"><b>Trợ Giúp</b></a></li>
  	</ul>
 	 <form name="form1" class="login" action="xulidangnhap.php" method="POST">
	<p class="login_p"><b class="login_b">Đăng nhập</b> <input type="text" name="user"></p>
	<p class="login_p"><b class="login_b">Mật Khẩu</b> <input type="password" name="pass"></p>
	<input class="login_in" type="submit" name="login" value="Đăng Nhập">
	</form>
	</nav>
	</div>
	<div>
	<img class="trogiup_img" src="image/phucduong.jpg">	
	<b class="trogiup_b">Mọi chi tiết xin liên hệ theo hotline(+84)1268050595</b>	
	<b class="trogiup_b" style="margin-left: 5%;">gặp anh Phúc để được tư vấn miễn phí</b>
	</div>
</body>
</html>