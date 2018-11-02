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
	<nav class="navbar navbar-inverse sidebar_nav" style="margin-bottom: 1%;">
  	<ul class="nav navbar-nav">
    	<li><a href="WebsiteHoiAn.php"><b>Trang Chủ</b></a></li>
    	<li><a href="gioithieu.php"><b>Giới Thiệu</b></a></li>
    	<li><a href="dulich.php"><b>Du Lịch</b></a></li>
    	<li><a href="bando.php" ><b>Bản Đồ</b></a></li>
    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Bảng Giá</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="banggia.php">Bảng Giá</a></li>
          <li><a href="timkiem.php">Tìm Kiếm</a></li>
        </ul>
      </li>
    	<li><a href="trogiup.php"><b>Trợ Giúp</b></a></li>
  	</ul>
 	 <form name="form1" class="login" action="xulidangnhap.php" method="POST">
	<p class="login_p"><b class="login_b">Đăng nhập</b> <input type="text" name="user"></p>
	<p class="login_p"><b class="login_b">Mật Khẩu</b> <input type="password" name="pass"></p>
	<input class="login_in" type="submit" name="login" value="Đăng Nhập">
	</form>
	</nav>
	</div>
	<div class="container">
  <b class="gioithieu_topic">Phố Cổ Hội An</b> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 1%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/hoian4.jpg" alt="Los Angeles" style="width:80%;margin-left: 10%;">
      </div>

      <div class="item">
        <img src="image/hoian7.jpg" alt="Chicago" style="width:80%;margin-left: 10%;">
      </div>
    
      <div class="item">
        <img src="image/hoian2.jpg" alt="New york" style="width:80%;margin-left: 10%;">
      </div>
      <div class="item">
        <img src="image/hoian6.jpg" alt="Chicago" style="width:80%;margin-left: 10%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>