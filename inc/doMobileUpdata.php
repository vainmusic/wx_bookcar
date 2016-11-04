<?php
global $_W,$_GPC;
$openid=$_W['openid'];//获取当前用户openid
$weid=$_W['uniacid'];//获取当前公众号ID

//查询当前用户详细信息，展示在编辑页面
$driver = pdo_get('wx_bookcar_drivers', array('weid'=>$weid,'open_id' => $openid));
if(!empty($openid)){
include $this->template('updata');
}else{
    echo "该平台只能在微信端打开";
}

?>