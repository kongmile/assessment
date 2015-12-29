<?php
  header("Content-type:text/html;charset=utf-8");
  require_once('config.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM nav WHERE id = $id";
  $res = $dbh->query($sql);
  $res = $res->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>快人一步 | 重庆邮电大学</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../frontEnd/css/nav.css">
<style type="text/css"></style></head>
<body>
  <div class="wrapper">
    <div class="logo">
      <a href="http://nav.zeroling.com/"><img src="../../files/logo.png" alt="" width="250" height="52"></a>
      <h1 class="hide">快人一步</h1>
    </div>
    <div class="tips"><a href="../../nav.php">临时主页</a>&gt<a href="../../back.php">管理页</a>&gt详情页 </div>
    <?php foreach ($res as $key => $value) { ?>
    <form name="input" action="back.edit.php?id=<?php echo $value['id']; ?>" method="post" id="input">
      <lable for="name">名称：</lable>
      <input type="text" name="name" id="name" value="<?php echo $value['name'] ?>"/>
      <lable for="url" >地址：</lable>
      <input type="text" name="url" id="url" value="<?php echo $value['url'] ?>"/>
      <lable for="kind">板块：</lable>
      <select name="kind" id="kind">
          <option value = '1'>每天不登不舒服斯基</option>
          <option value = '2'>学霸们的必争之地</option>
          <option value = '3'>原来学校还有这么多网站</option>
      </select>
      <?php
        /*根据$_GET['id']选择板块的默认选项*/
        $kind = $value['id'];
        echo "  <script>
        var num = {$kind}
        var kind = document.getElementsByTagName('option');
        console.log(kind);
        console.log(kind[num]); 
        </script>";
      }  ?>
      <input Type="Submit" Name="submit" Value="保存"> 
      <input Type="Submit" Name="submit" Value="删除"> 
    </form>
  </div>
</script>
</body>
</html>