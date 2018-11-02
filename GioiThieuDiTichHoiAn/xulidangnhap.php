<!DOCTYPE html>
<html>
<head>
	<title>xulidangnhap</title>
</head>	
<?php
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	if($user == "" || $pass == ""){
		header("location:WebsiteHoiAn.php");
	}else{
		$link = mysql_connect("localhost","root","") or die ("Khong the ket noi den co so du lieu");
		mysql_select_db("hoian");
		$rs = mysql_query("SELECT *FROM user WHERE nickname = '$user' and password = '$pass'");
		if(mysql_num_rows($rs)==0){
			header("location:WebsiteHoiAn.php");
		}else{
			header("location:WebsiteHoiAn1.php");
		}
		mysql_free_result($rs);
		mysql_close($link);
	}
?>
<body>
</body>
</html>