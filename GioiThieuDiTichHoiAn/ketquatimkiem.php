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
<style> 
.search {
    width: 1000px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('image/search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
</style>
<body>
	 <div>
<div>
  <nav class="navbar navbar-inverse sidebar_nav" style="margin-bottom: 2%;">
    <ul class="nav navbar-nav">
      <li><a href="WebsiteHoiAn.php" ><b>Trang Chủ</b></a></li>
      <li><a href="gioithieu.php" ><b>Giới Thiệu</b></a></li>
      <li><a href="dulich.php" ><b>Du Lịch</b></a></li>
      <li><a href="bando.php" c><b>Bản Đồ</b></a></li>
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
    <form name="form" action="ketquatimkiem.php" method="POST">
  <label><b style="font-size: 32px;color: #990000;margin-left: 100px">Tìm Kiếm: </b><input type="text" name="search" placeholder="Search.." class="search"></label>
</form>
  </div>
  </div>
  <?php 
  $S = $_REQUEST['search'];
  $link=mysql_connect("localhost","root","") or die ("Khong the ket noi den co so du lieu");
  mysql_select_db("hoian",$link);
  $sql ="SELECT *FROM place WHERE Diadiem LIKE '%$S%' OR MaDD LIKE '%$S%'OR Diachi LIKE '%$S%' OR Tgmocua LIKE '%$S%' OR Giave LIKE '%$S%'";
  $rs=mysql_query($sql,$link);
  echo '<h1 class="banggia_topic">Bảng Giá Phố Cổ Hội An</h1>';
  echo '<table border="1" width="90%" class="banggia_table">';
  echo'<tr style="background-color: #d8d8d8"><th>Mã Số</th><th>Địa Điểm</th><th>Địa Chỉ</th><th>Thời Gian Mở Cửa</th><th>Giá Vé</th><tr>';
  while ($row=mysql_fetch_array($rs,MYSQL_BOTH)) {
    echo'<tr><td>'.$row['MaDD'].'</td><td>'.$row['Diadiem'].'</td><td>'.$row['Diachi'].'</td><td>'.$row['Tgmocua'].'</td><td>'.$row['Giave'].'</td></tr>';
  }
  echo'</table>';
  mysql_free_result($rs);
  mysql_close($link);

?>
</body>
</html>