<?php
	header("Content-type:text/html;charset=utf-8");
	include('date.class.php');
	$id = $_GET['id'];
	$submit = $_POST['submit'];
	$name = $_POST['name'];
	$url = $_POST['url'];
	$kind = $_POST['kind'];

	$edit = new Date();

	if($submit  ==  "保存")
	{
		$edit->update($name, $url, $kind, $id);
		$edit->tip();
	}
	else if($submit   ==  "删除")
	{
		$edit->delete($id);
		$edit->tip();
	}

?>