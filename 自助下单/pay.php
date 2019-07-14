<?php
/**
 * ---------------------参数生成页-------------------------------
 * 在您自己的服务器上生成新订单，并把计算好的订单信息传给您的前端网页。
 * 注意：
 * 1.key一定要在服务端计算，不要在网页中计算。
 * 2.token只能存放在服务端，不可以以任何形式存放在网页代码中（可逆加密也不行），也不可以通过url参数方式传入网页。
 * 3.接口跑通后，如果发现收款二维码是我们官方的，请检查APP是否正在运行。为保障您收款功能正常，如果您的收款手机APP掉线超过一分钟，就会触发代收款机制，详情请看网站帮助。
 * --------------------------------------------------------------
 */
	include 'define.php';
    //从网页传入money:支付价格， pay_type:支付渠道：43-支付宝；44-微信支付 
	$order_no = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);    //订单号
	$subject = '商品名称';
	$pay_type = $_GET["pay_type"];
    $money = $_GET["money"];
    $extra = "";
    
    $sign = md5("order_no=" . $order_no . "&subject=" . $subject . "&pay_type=" . $pay_type . "&money=" . $money . "&app_id=" . $app_id . "&extra=" . $extra . "&" . $app_secret);
    //经常遇到有研发问为啥sign值返回错误，大多数原因：1.参数的排列顺序不对；2.上面的参数少传了，但是这里的sign值又带进去计算了，导致服务端sign算出来和你的不一样。

    $returndata['order_no'] = $order_no;
	$returndata['subject'] = $subject;
    $returndata['pay_type'] = $pay_type;
    $returndata['money'] = $money;
    $returndata['app_id'] = $app_id;
    $returndata['extra'] =$extra;
	$returndata['sign'] =$sign;
    echo jsonSuccess("OK",$returndata,"");


    //返回错误
    function jsonError($message = '',$url=null)
    {
        $return['msg'] = $message;
        $return['data'] = '';
        $return['code'] = -1;
        $return['url'] = $url;
        return json_encode($return);
    }

    //返回正确
    function jsonSuccess($message = '',$data = '',$url=null) 
    {
        return json_encode($data);
    }

?>
