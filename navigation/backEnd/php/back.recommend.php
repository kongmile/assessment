<?php
	header("Content-type:text/html;charset=utf-8");
	include('date.class.php');

	$name = $_POST['name'];
	$url = $_POST['url'];
	$kind = $_POST['kind'];
	
	$recommend = new Date();
	$recommend->upload($name, $url, $kind);
	$recommend->tip();
?>