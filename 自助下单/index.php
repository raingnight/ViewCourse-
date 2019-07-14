<?php
//声明编码
 header('Content-type: text/html; charset=UTF8');
?>
<html>
<head>
//自适应屏幕大小
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head>
<body>
<div class="content" align="center">
//以post方式提交表单
<form action="add.php" method="post">
<span>账号：</span>
<input type="text" name="id" placeholder="账号" required><br><br>
<span>密码：</span>
<input type="password" name="pwd" placeholder="密码" required><br><br>
<span>学校全称：</span>
<input type="text" name="school" placeholder="学校全称" required><br><br>
<span>课程平台：</span>
<input type="text" name="platform" placeholder="课程平台" value="智慧树" required><br><br>
<span>课程门数：</span>
<input type="text" name="count" placeholder="课程门数" id="num" required><br><br>
<span>课程名称：</span><br>
<textarea  name="classname" placeholder="请输入课程名称,多门课程用逗号分开" required>
</textarea><br>
<div class="list">
<p class="p1">总价：</p>
<input id="price" name="sprice"class="p1" value="0"  readonly="readonly">
<p class="p1">元</p>
</div>
<br>
 <input type="submit" value="提交" class="submit" id="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <input type = "reset" value = "重置" class="reset">
</form>
</div>
</body>
<style>
body{
	background:url(image/bg2.jpg);
}
.list{
	width:120px;
	height:50px;
	background:url(image/bg5.jpg);
}
.p1{
	float:left;
}
#price{
	margin-top:15px;
	width:50px;
	color:red;
}
textarea{
    height:100px;
    padding: 5px 0px 0px 5px;
    width: 70%;
}
<!--引入jquery库-->
</style>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js">
</script>
<script>	
		$(function(){		
			$('#num').on('input  propertychange',function(){				
				var num = $('#num').val();
				var price = num*15;
				 $("#price").val(price);
			})
		});			
</script>
</html>
