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
	<link rel="stylesheet" type="text/css" href="hoian97.css">
</head>
<script>
function myFunction() {
    alert("Bạn Đã Thêm Thành Công");
}
</script>
<body>
	<div>
	<nav class="navbar navbar-inverse sidebar_nav">
  	<ul class="nav navbar-nav">
    	<li><a href="WebsiteHoiAn1.php" class="sidebar_li"><b>Trang Chủ</b></a></li>
    	<li><a href="gioithieu1.php" class="sidebar_li"><b>Giới Thiệu</b></a></li>
    	<li><a href="dulich1.php" class="sidebar_li"><b>Du Lịch</b></a></li>
    	<li><a href="bando1.php" class="sidebar_li"><b>Bản Đồ</b></a></li>
    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Bảng Giá</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="banggia1.php">Bảng Giá</a></li>
          <li><a href="banggia_chinhsua.php">Chỉnh sửa</a></li>
          <li><a href="banggia_xoa.php">Xóa</a></li>
          <li><a href="timkiem1.php">Tìm Kiếm</a></li>
          <li><a href="them.php">Thêm</a></li>
        </ul>
      </li>
    	<li><a href="trogiup1.php" class="sidebar_li"><b>Trợ Giúp</b></a></li>
  	</ul>
  	<a href="WebsiteHoiAn.php" style="text-decoration: none;float:right;color: white;margin-top: 12px;margin-right: 15px;"><b>Đăng Xuất</b></a>
	</nav>
	</div>
	<div class="them_div">
    <form name="form" action="xulithem.php" method="POST">
    <p class="them_topic"><b>Thêm địa điểm</b></p><br>
    <p class="them_p"><b>Mã Địa Điểm: </b> </p><input class="them_input" type="text" name="madd"></p>
    <p class="them_p"><b>Địa Điểm: </b></p><input class="them_input" type="text" name="diadiem"></p>
    <p class="them_p"><b>Địa Chỉ: </b></p><input class="them_input" type="text" name="diachi"></p>
    <p class="them_p"><b>TG Mở Cửa: </b></p><input class="them_input" type="text" name="tgmocua"></p>
    <p class="them_p"><b>Giá Vé: </b><input class="them_input" type="text" name="giave"></p>
    <input class="them_sub" type="image" src="image/add.png" name="sub" value="ADD" onclick="myFunction()">
  </form>
  </div>
</body>
</html>