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
<body>
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
		<b class="bando_b">Bản đồ hành chính Phố Cổ Hội An</b>
		<img class="bando_img" src="image/bandohanhchinh.jpg" width="80%" height="70%">
		<i class="bando_i">Bản đồ hành chính Phố Cổ Hội An</i>
	</div>
</body>
</html>
