<?php
header('Content-type="text/html";charset="UTF8"');
?>
<html>
<body>
<center>
<h3>请输入账号进行订单查询</h3>
<form action="user_view.php" method="post">
	<span>账号：</span><input type="text" name="userid" placeholder="请输入账号"><br><br>
	<input type="submit" value="确定">
</form>
</center>
</body>
</html>