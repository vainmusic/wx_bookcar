<?php
global $_W,$_GPC;

$longitude= floatval($_GPC['longitude']); /*经度*/
$latitude= floatval($_GPC['latitude']);  /*纬度*/

$openid=$_W['openid'];  /*用户openid*/
$weid=$_W['uniacid'];  /*公众号id*/


$timestamp=$_W['timestamp'];
$time=date('Y-m-d H:i:s', $timestamp);

$data= pdo_get('wx_bookcar_drivers', array('weid'=>$weid,'openid' => $openid)); /*获取当前司机信息*/
if(count($data)>1){
    /*判断在司机表里面是否存在*/
    $condition=[
        'weid'=>$weid,
        'openid' => $openid
    ];
    $updateData=[
        'longitude'=>$longitude,
        'latitude'=>$latitude,
        'update_time'=>$time
    ];
    $result = pdo_update('wx_bookcar_drivers',$data, $condition);
}