<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];//获取公众号ID
$openid=$_W['openid'];

//判断当前公众号文本配置是否存在，不存在则使用默认文本配置
$data=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text'],['value']);
if(empty($data))
{
    $data=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'text'],['value']);
}
if(!empty($openid)){
include $this->template('rule');
}else {
     echo "该平台只能在微信端打开";
}
?>