
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站推荐</title>
	<link rel="stylesheet" type="text/css" href="../../frontend/css/nav.css">
</head>
<body>
	 <div class="wrapper">
	    <div class="logo">
	      <a href="http://nav.zeroling.com/"><img src="./files/logo.png" alt="" width="250" height="52"></a>
	      <h1 class="hide">快人一步</h1>
	    </div>

	    <div class="tips">临时主页 </div>
		<div id="main">
		<form name="input" action="back.insert.php" method="post">
			<lable for="name">名称：</lable>
			<input type="text" name="name" id="name" />
			<lable for="url">地址：</lable>
			<input type="text" name="url" id="url" />
			<lable for="kind">板块：</lable>
			<select name="kind" id="kind">
					<option value = 1 >每天不登不舒服斯基</option>
					<option value = 2>学霸们的必争之地</option>
					<option value= 3>原来学校还有这么多网站</option>
			</select>
			<input type="submit" value="提交">
		</form>
	</div>	
</body>
<?php
	$kind = $_GET['kind'];
	echo "	<script>
				var num = {$kind}
				var kind = document.getElementsByTagName('option');
				console.log(kind);
				console.log(kind[num]);
				kind[num-1].setAttribute('selected','selected');
			</script>"
?>
</html>