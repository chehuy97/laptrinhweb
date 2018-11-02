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
    	<li><a href="WebsiteHoiAn1.php" class="sidebar_li"><b>Trang Chủ</b></a></li>
    	<li><a href="gioithieu1.php" class="sidebar_li"><b>Giới Thiệu</b></a></li>
    	<li><a href="dulich1.php" class="sidebar_li"><b>Du Lịch</b></a></li>
    	<li><a href="bando1.php" class="sidebar_li"><b>Bản Đồ</b></a></li>
    	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Bảng Giá</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="banggia1.php">Bảng Giá</a></li>
          <li><a href="banggia_chinhsua.php">Chỉnh sửa</a></li>
          <li><a href="xoa.php">Xóa</a></li>
          <li><a href="timkiem1.php">Tìm Kiếm</a></li>
          <li><a href="them.php">Thêm</a></li>
        </ul>
      </li>
    	<li><a href="trogiup1.php" class="sidebar_li"><b>Trợ Giúp</b></a></li>
  	</ul>
  	<a href="WebsiteHoiAn.php" style="text-decoration: none;float:right;color: white;margin-top: 12px;margin-right: 15px;"><b>Đăng Xuất</b></a>
	</nav>
	</div>
<?php
	$link=mysql_connect("localhost","root","") or die ("Khong the ket noi den co so du lieu");
	mysql_select_db("hoian",$link);
	$sql ="select *from place";
	$rs=mysql_query($sql,$link);
	echo '<h1 class="banggia_topic">Bảng Giá Phố Cổ Hội An</h1>';
	echo '<table border="1" width="90%" class="banggia_table">';
	echo'<tr style="background-color: #d8d8d8"><th>Mã Số</th><th>Địa Điểm</th><th>Địa Chỉ</th><th>Thời Gian Mở Cửa</th><th>Giá Vé</th><th>Chỉnh Sửa</th><tr>';
	while ($row=mysql_fetch_array($rs,MYSQL_BOTH)) {
		echo'<tr><td>'.$row['MaDD'].'</td><td>'.$row['Diadiem'].'</td><td>'.$row['Diachi'].'</td><td>'.$row['Tgmocua'].'</td><td>'.$row['Giave'].'</td><td><a href="capnhat.php?MDD='.$row['MaDD'].' & GV='.$row['Giave'].' ">xxx</a></td></tr>';
	}
	echo'</table>';
	mysql_free_result($rs);
	mysql_close($link);
?>
</body>
</html>