<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	$mdd = $_REQUEST['madd'];
	$dd = $_REQUEST['diadiem'];
	$dc = $_REQUEST['diachi'];
	$tgmc = $_REQUEST['tgmocua'];
	$gv = $_REQUEST['giave'];
	
	$link = mysql_connect("localhost","root","") or die ("khong the ket noi den co so du lieu");
	mysql_select_db("hoian",$link);
	$rs = mysql_query("INSERT INTO place VALUES ('$mdd','$dd','$dc','$tgmc','$gv')");
	header("location:them.php");
	mysql_close($link);
?>
<body>

</body>
</html>