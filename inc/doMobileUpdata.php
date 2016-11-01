<?php
global $_W,$_GPC;
$openid=$_W['openid'];
$weid=$_W['uniacid'];
$driver = pdo_get('wx_bookcar_drivers', array('weid'=>$weid,'open_id' => $openid));
include $this->template('updata');
?>