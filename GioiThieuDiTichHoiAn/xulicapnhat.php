<!DOCTYPE html>
<html>
<head>
	<title>xulicapnhat</title>
</head>
<?php 
	$up = $_REQUEST['update'];
	$MDD = $_REQUEST['madd'];
	$link = mysql_connect("localhost","root","") or die ("khong the ket noi den co so du lieu");
	mysql_select_db("hoian",$link);
	$rs = mysql_query("UPDATE place SET Giave = '$up' WHERE MaDD = '$MDD'");
	header("location:banggia_chinhsua.php");
	mysql_close($link);
?>
<body>

</body>
</html>