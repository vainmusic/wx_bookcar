<?php

global $_W,$_GPC;
$openid=$_W['openid'];
$weid=$_W['uniacid'];
$name=$_GPC['name'];
$phone=$_GPC['phone'];
$models=$_GPC['models'];
$lpnumber=$_GPC['lpnumber'];
$information=$_GPC['information'];
    $data = array(
        'name' => $name,
    	'phone'=>$phone,
    	'models'=>$models,
    	'lpnumber'=>$lpnumber,
    	'information'=>$information,
    );
    $condition=[
        'open_id'=>$openid,
        'weid'=>$weid
    ];
    $result = pdo_update('wx_bookcar_drivers', $data,$condition);
    if (!empty($result)) {
    	   	message('修改成功！', '../../app/' .  $this->createMobileUrl('driver'));
    
    } else {
       	message('修改成功！', '../../app/' .  $this->createMobileUrl('driver'));
    } 

?>