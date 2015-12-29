<?php
	header("Content-type:text/html;charset=utf-8");
	include('date.class.php');
	$name = $_POST['name'];
	$url = $_POST['url'];
	$kind = $_POST['kind'];
	
	$add = new Date();
	$add->upload($name, $url, $kind, 1);
	$add->tip();

?>