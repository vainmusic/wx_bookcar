<?php
global $_W,$_GPC;
$openid=$_W['openid'];//获取当前用户openid
$weid=$_W['uniacid'];//获取当前公众号ID
if(!empty($openid)){
include $this->template('uppicture');
}else {
    echo "该平台只能在微信端打开";
}
?>