<?php
//获取管理员输入的账号密码
$HOST_ID=$_POST['userid'];
$HOST_PWD=$_POST['pwd'];
$con=mysql_connect("localhost",$HOST_ID,$HOST_PWD);
//判断数据库连接是否成功
if(!$con){
	echo "<script>alert('信息有误，请重新输入！');location='admin.php';</script>";
}
mysql_select_db("zzxd", $con);
//查询所有订单
$result1=mysql_query("SELECT * from orderdetail");
//输出查询结果
echo "<table><tr><td>===账号===|</td><td>===密码===|</td><td>===学校===|</td><td>===平台===|</td><td>===课程===</td></tr>";
while($row=mysql_fetch_array($result1)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['pwd']."</td>";
    echo "<td>".$row['school']."</td>";
    echo "<td>".$row['platform']."</td>";
   echo "<td>".$row['classname']."</td>";
    echo "</tr>";
}
echo "</table>";

mysql_close($con);

?>
