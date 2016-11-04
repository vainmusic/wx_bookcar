<?php

global $_W,$_GPC;
$openid=$_W['openid'];//获取openid
$weid=$_W['uniacid'];//获取当前公众号ID
/*获取编辑页面输入的 名字 手机 车型 车牌 简介*/
$name=$_GPC['name'];
$phone=$_GPC['phone'];
$models=$_GPC['models'];
$lpnumber=$_GPC['lpnumber'];
$information=$_GPC['information'];
/*提交修改跟新数据*/
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