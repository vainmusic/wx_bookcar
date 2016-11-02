<?php

global $_W;
$weid=$_W['uniacid'];
$openid=$_W['openid'];
$timestamp=$_W['timestamp'];
$time=date('Y-m-d H:i:s', $timestamp);
$oid=$timestamp- intval($timestamp/100000)*100000;
$order = pdo_get('wx_bookcar_order', array('weid'=>$weid,'openid' => $openid));
if($order!=null&&$order['type']==0){
    	$params = array(
		'tid' =>$order['oid'],      //充值模块中的订单号，此号码用于业务模块中区分订单，交易的识别码
		'ordersn' =>$order['oid'],  //收银台中显示的订单号
		'title' => '系统充值余额',          //收银台中显示的标题
		'fee' =>$order['price'] ,      //收银台中显示需要支付的金额,只能大于 0
		'user' => $_W['member']['uid'],     //付款用户, 付款的用户名(选填项)
	);
	$this->pay($params);
}else {
$driver = pdo_get('wx_bookcar_drivers', array('weid'=>$weid,'open_id' => $openid));
if($driver==null){
    $price= pdo_get('wx_bookcar_config', array('name'=>'price','weid'=>$weid),array('value'));
    var_dump($price);
    if($price==null){
      $price= pdo_get('wx_bookcar_config', array('name'=>'price','weid'=>-1),array('value'));
        var_dump($price['value']);
    }
    $user_data = array(
        'price'=>$price['value'],
        'creatTime'=>$time,
    	'weid' =>$weid,
    	'oid' => $oid,
        'openid'=>$openid,
    );
      $result = pdo_insert('wx_bookcar_order', $user_data);
}

	$params = array(
		'tid' =>$oid,      //充值模块中的订单号，此号码用于业务模块中区分订单，交易的识别码
		'ordersn' =>$oid,  //收银台中显示的订单号
		'title' => '系统充值余额',          //收银台中显示的标题
		'fee' =>$price[value] ,      //收银台中显示需要支付的金额,只能大于 0
		'user' => $_W['member']['uid'],     //付款用户, 付款的用户名(选填项)
	);
		$this->pay($params);
}

?>