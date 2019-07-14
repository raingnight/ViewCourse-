<?php
header('Content-type:text/html;charset="UTF8"');
?>
<html>
<body>
<center>
<form action="admin_see.php" method="post">
	<span>账号：</span><input type="text" name="userid" placeholder="请输入账号"><br><br>
	<span>密码：</span><input type="password" name="pwd" placeholder="请输入密码"><br><br>
	<input type="submit" value="确定">
</form>
</center>
</body>
</html>