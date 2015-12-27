<?php
  header("Content-type:text/html;charset=utf-8");
  require_once('backEnd/php/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>快人一步 | 重庆邮电大学</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="frontEnd/css/nav.css">
<style type="text/css"></style></head>
<body>
  <div class="wrapper">
    <div class="logo">
      <a href="http://nav.zeroling.com/"><img src="./files/logo.png" alt="" width="250" height="52"></a>
      <h1 class="hide">快人一步</h1>
    </div>

    <div class="tips"><a href="nav.php">临时主页</a>&gt管理页 </div>
    <div class="tips">点击项目进行修改删除或审核被推荐网站 </div> 
    <div class="unit">
      <h2 class="unit-title">被推荐的网站</h2>
      <div class="unit-detail">
        <?php
          $sql = "SELECT * FROM nav WHERE state = '0';";
          $res = $dbh->query($sql);
          $res = $res->fetchAll();
          foreach ($res as $key => $value) { ?>
        <a href="./backEnd/php/detail.php?id=<?php echo $value['id'] ?>" class="theme<?php echo rand(1, 18);?>" ><?php echo $value['name'] ?></a>
        <?php } ?>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
      </div>
      <h2 class="unit-title">每天不登不舒服斯基</h2>
      <div class="unit-detail">
        <?php
          $sql = "SELECT * FROM nav WHERE kind = '1' AND state != '0';";
          $res = $dbh->query($sql);
          $res = $res->fetchAll();
          foreach ($res as $key => $value) { ?>
        <a href="./backEnd/php/detail.php?id=<?php echo $value['id'] ?>" class="theme<?php echo rand(1, 18);?>" target="_blank"><?php echo $value['name'] ?></a>
        <?php } ?>
        <a href="./backend/php/back.add.php?kind=1" class="more" >+ 添加</a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
      </div>
    </div>

	<div class="unit">
		<h2 class="unit-title">学霸们的必争之地</h2>
		<div class="unit-detail">
			<?php
        $sql = "SELECT * FROM nav WHERE kind = '2' AND state != '0'";
        $res = $dbh->query($sql);
        $res = $res->fetchAll();
        foreach ($res as $key => $value) { ?>
      <a href="./backEnd/php/detail.php?id=<?php echo $value['id'] ?>" class="theme<?php echo rand(1, 18);?>" target="_blank"><?php echo $value['name'] ?></a>
      <?php } ?>
      <a href="./backend/php/back.add.php?kind=2" class="more" >+ 添加</a>
			<a class="placeholder" href=""></a>
			<a class="placeholder" href=""></a>
			<a class="placeholder" href=""></a>
			<a class="placeholder" href=""></a>
		</div>
	</div>

    <div class="unit">
      <h2 class="unit-title">原来学校还有这么多网站</h2>
      <div class="unit-detail">
      <?php
        $sql = "SELECT * FROM nav WHERE kind = '3' AND state != '0'";
        $res = $dbh->query($sql);
        $res = $res->fetchAll();
        foreach ($res as $key => $value) { ?>
      <a href="./backEnd/php/detail.php?id=<?php echo $value['id'] ?>" class="theme<?php echo rand(1, 18);?>" target="_blank"><?php echo $value['name'] ?></a>
        <?php } ?>
        <a href="./backend/php/back.add.php?kind=1" class="more">+ 添加</a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
        <a class="placeholder" href=""></a>
      </div>
    </div>

	<div class="info">Powered By <a href="http://zeroling.com">Zeroling</a>.</div>
  </div>
  <script>
  	var _hmt = _hmt || [];
	(function(d) {
  		var hm = d.createElement("script");
  		hm.src = "//hm.baidu.com/hm.js?b0057189af83a1c31edf663c05edb169";
  		var s = d.getElementsByTagName("script")[0]; 
  		s.parentNode.insertBefore(hm, s);
	})(document);
  </script>
</body>
</html>
