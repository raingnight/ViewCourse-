<?php
//声明编码
 header('Content-type: text/html; charset=UTF8');
?>
<?php	
//获取数据库连接
	require_once "connect.php";
	$id=$_POST["id"];
	$pwd=$_POST["pwd"];
	$school=$_POST["school"];
	$platform=$_POST["platform"];
	$count=$_POST["count"];
	$classname=$_POST["classname"];
	$price=$_POST["sprice"];
	if($id==null){
		    echo "<script>alert('请输入账号！');location='index.php';</script>";
		};
	if($pwd==null){
		    echo "<script>alert('请输入密码！');location='index.php';</script>";
		};
	if($school==null){
		    echo "<script>alert('请输入学校全称！');location='index.php';</script>";
		};
	if($platform==null){
		    echo "<script>alert('请输入平台名称！');location='index.php';</script>";
		};
	if($count==null){
		    echo "<script>alert('请输入课程数量！');location='index.php';</script>";
		};
	$sql="insert into orderdetail (id,pwd,school,platform,count,classname,time)values('$id','$pwd','$school','$platform','$count','$classname',now())";
	mysql_query("set names 'utf8'");
	mysql_query($sql);
	mysql_close;
	//echo "<script>alert('信息提交成功，跳转付款页面！');location='chosetopay.html';</script>";
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>刷客在线支付</title>
</head>
<body>
<center>
<h1>请您确认订单信息：</h1>
<span>账号：</span><?php echo $id ?><br>
<span>密码：</span><?php echo $pwd ?><br>
<span>学校：</span><?php echo $school ?><br>
<span>平台：</span><?php echo $platform ?><br>
<span>课程名：</span><?php echo $classname ?>
<br><br><br>
</center>
<div align="center">
    <form>
        <p><input id="inputmoney" type="text" name="inputmoney" class="form-control" placeholder="请输入金额" required value="<?php echo $price.'.00'?>" readonly="readonly"></p>
        <div class="radio">
            <label>
                <p><input type="radio" name="demo1" id="demo1-alipay" value="43" checked="">
                    支付宝支付</p>
            </label>
        </div>
        <div class="radio">
            <label>
                <p><input type="radio" name="demo1" id="demo1-weixin" value="44">
                微信支付</p>
            </label>
        </div>
        <button type="button" id="demoBtn1">确认支付</button>
    </form>
</div>
    <form style='display:none;' id='formpay' name='formpay' method='post' action='https://api.6688pay.com:8080/?input_charset=utf-8'>
		<input name='order_no' id='order_no' type='text' value=''/>
        <input name='subject' id='subject' type='text' value='' />
        <input name='pay_type' id='pay_type' type='text' value='' />
        <input name='money' id='money' type='text' value=''/>
        <input name='app_id' id='app_id' type='text' value=''/>        
        <input name='extra' id='extra' type='text' value=''/>
		<input name='sign' id='sign' type='text' value=''/>
        <input type='submit' id='submitdemo1'>
    </form>

<!-- Jquery files -->
<script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$().ready(function(){
    function getistype(){
        return ($("#demo1-alipay").is(':checked') ? "43" : "44" );
    }
//确认支付事件
    $("#demoBtn1").click(function(){
        $.get(
            "pay.php",
            {
                money : $("#inputmoney").val(),
                pay_type : getistype(),
            },
            function(data){
                $("#order_no").val(data.order_no);
				$('#subject').val(data.subject);
                $("#pay_type").val(data.pay_type);                
                $('#money').val(data.money);
                $('#app_id').val(data.app_id);
                $('#extra').val(data.extra);
                $('#sign').val(data.sign);
                $('#submitdemo1').click();
            }, "json"
        );
    });
});
</script>
<style>
body{
	background:url("image/bg2.jpg");
}
</style>
</body>
</html> 
