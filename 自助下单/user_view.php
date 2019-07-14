<?php
header('Content-type="text/html";charset="UTF8"');
$USER_ID=$_POST['userid'];
require_once('connect.php');
$sql="select * from orderdetail where id = '$USER_ID'";
$result1=mysql_query($sql);
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