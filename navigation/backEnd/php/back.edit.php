<?php
	require_once('config.php');
	header("Content-type:text/html;charset=utf-8");
	$id = $_GET['id'];
	$submit = $_POST['submit'];
	if($submit   ==  "保存")
	{
		$name = $_POST['name'];
		$url = $_POST['url'];
		$kind = $_POST['kind'];
		$sql = "UPDATE nav SET name = '$name',url = '$url',state = '1',kind = '$kind' WHERE id='$id'";
		var_dump($sql);
		if($dbh->query($sql))
		{
			echo "<script>alert('修改成功');window.location.href='../../back.php';</script>";
		}
		else
		{
			echo "<script>alert('修改失败');window.location.href='../../back.php';</script>";
		}
	}
	else if($submit   ==  "删除")
	{
		$sql = "DELETE FROM nav WHERE id = '$id'";
		if($res = $dbh->query($sql))
		{
		echo "<script>alert('已删除');window.location.href='../../back.php';</script>";
		}else{
			echo "<script>alert('删除失败');window.location.href='../../back.php';</script>";
	}
	}
?>