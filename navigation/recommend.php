<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站推荐</title>
	    <style type="text/css">
      @charset "UTF-8";html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font:inherit;font-size:100%;vertical-align:baseline}html{line-height:1}ol,ul{list-style:none}table{border-collapse:collapse;border-spacing:0}caption,th,td{text-align:left;font-weight:normal;vertical-align:middle}q,blockquote{quotes:none}q:before,q:after,blockquote:before,blockquote:after{content:"";content:none}a img{border:none}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary{display:block}body{background:#f5f5f5;font-family:"微软雅黑","Verdana","Helvetica","sans-serif"}.hide{display:none}.wrapper{width:1000px;margin:0 auto}@media screen and (max-width: 999px){.wrapper{width:94%;margin:0 auto}}.logo{text-align:center;margin-bottom:30px;margin-top:40px}.tips{color:#999;font-size:14px;text-align:center;margin-bottom:50px}.unit{margin-bottom:90px}@media screen and (max-width: 550px){.unit{margin-bottom:50px}}.unit .unit-title{font-size:22px;color:#333;margin-bottom:15px;font-weight:bold}@media screen and (max-width: 550px){.unit .unit-title{font-size:18px}}.unit .unit-detail{text-align:justify;font-size:0;font-size:0.1px\9}.unit .unit-detail:after{content:'';width:100%;display:-moz-inline-stack;display:inline-block;vertical-align:middle;*vertical-align:auto;zoom:1;*display:inline}.unit a{display:-moz-inline-stack;display:inline-block;vertical-align:middle;*vertical-align:auto;zoom:1;*display:inline;background:rgba(255,255,255,0.8);margin:0 0 20px 0;font-size:20px;width:15%;height:70px;line-height:70px;text-decoration:none;text-align:center;color:#fff}.unit a:hover{filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=80);opacity:0.8}@media screen and (max-width: 900px){.unit a{width:18%;font-size:18px;margin-bottom:20px;height:60px;line-height:60px}}@media screen and (max-width: 750px){.unit a{width:23%;font-size:18px;margin-bottom:20px;height:60px;line-height:60px}}@media screen and (max-width: 550px){.unit a{width:31%;height:50px;line-height:50px;font-size:14px;margin-bottom:10px}}.unit .placeholder{padding:0;height:0}.unit .theme1{background:#1abc9c}.unit .theme2{background:#2ecc71}.unit .theme3{background:#3498db}.unit .theme4{background:#9b59b6}.unit .theme5{background:#34495e}.unit .theme6{background:#16a085}.unit .theme7{background:#27ae60}.unit .theme8{background:#2980b9}.unit .theme9{background:#8e44ad}.unit .theme10{background:#2c3e50}.unit .theme11{background:#f1c40f}.unit .theme12{background:#e67e22}.unit .theme13{background:#e74c3c}.unit .theme14{background:#95a5a6}.unit .theme15{background:#f39c12}.unit .theme16{background:#d35400}.unit .theme17{background:#c0392b}.unit .theme18{background:#7f8c8d}.unit .more{background:#ddd;color:#111}.info{color:#999;margin:25px;position:relative;right:5px;text-align:center;}a{color:#999;}a:hover{color:#2980b9;}
    </style>
</head>
<body>
	 <div class="wrapper">
	    <div class="logo">
	      <a href="http://nav.zeroling.com/"><img src="./files/logo.png" alt="" width="250" height="52"></a>
	      <h1 class="hide">快人一步</h1>
	    </div>

	    <div class="tips">临时主页 </div>
		<div id="main">
		<form name="input" action="backEnd/php/back.recommend.php" method="post">
			<lable for="name">名称：</lable>
			<input type="text" name="name" id="name" />
			<lable for="url">地址：</lable>
			<input type="text" name="url" id="url" />
			<lable for="kind">板块：</lable>
			<select name="kind" id="kind">
					<option value = 1>每天不登不舒服斯基</option>
					<option value = 2>学霸们的必争之地</option>
					<option value = 3>原来学校还有这么多网站</option>
			</select>
			<input type="submit" value="提交">
		</form>
	</div>	
</body>

<?php
	/*根据$_GET['id']选择板块的默认选项*/
	$kind = $_GET['kind'];
	echo "	<script>			
				var num = {$kind}
				var kind = document.getElementsByTagName('option');
				kind[num-1].setAttribute('selected','selected');
			</script>"
?>
</html>