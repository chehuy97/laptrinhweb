<!DOCTYPE html>
<html>
<head>
	<title>xulixoa</title>
</head>
<?php 
	$MDD = $_GET['MDD'];
	$link = mysql_connect("localhost","root","") or die ("khong the ket noi den co so du lieu");
	mysql_select_db("hoian",$link);
	$rs = mysql_query("DELETE FROM place WHERE MaDD = '$MDD'");
	header("location:banggia_xoa.php");
	mysql_close($link);
?>
<body>

</body>
</html>