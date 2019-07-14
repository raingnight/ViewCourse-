<?php 
 header('Content-type: text/html; charset=UTF8');
?>
<?
require_once "connect.php";
$sql="insert into orderdetail (payresult)values('成功')";
	mysql_query("set names 'utf8'");
	mysql_query($sql);
	mysql_close;
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta charset="utf-8">
</head>
<body>
<h1 align="center">支付成功！</h1>
<h2 align="center">==注意事项==</h2>
<p align="center">1. 可以登录账号查看进度，但不要点击视频<br>
2. 如果没到考试时间，等到时间了提醒我<br>
3. 1~3天完成，3天后客户自行上号验收<br>
4. 在线时间：早10:00~晚23:00，其他时间可以留言，上线后会立即回复
</p>
<center>
<span>如有疑问请点击下方按钮联系客服</span><br>
<img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=3119662020&o=刷客&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:3119662020:1 alt="在线下单">
</center>
</body>
</html>
