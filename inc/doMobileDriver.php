<?php
global $_W;
//这个操作被定义用来呈现 功能封面
$openid=$_W['openid'];
/*
var_dump($openid);*/

$weid=$_W['uniacid'];

$timestamp=$_W['timestamp'];

$data=pdo_get('wx_bookcar_drivers',[
    'open_id'=>$openid,
],[]);




include $this->template('driver');