<?php
	require_once('config.php');
	header("Content-type:text/html;charset=utf-8");
	$name = $_POST['name'];
	$url = $_POST['url'];
	$kind = $_POST['kind'];
	$sql = "INSERT INTO nav(name, url, kind, state) VALUES ('$name','$url','$kind', '1')";
	if($dbh->query($sql))
	{
		echo "<script>alert('已添加');window.location.href='../../back.php';</script>";
	}
	else
	{
		echo "<script>alert('请重试.有bug，请联系我 qq：943643887 13164403326，我马上改');window.location.href='back.add.php';</script>";
	}

?>