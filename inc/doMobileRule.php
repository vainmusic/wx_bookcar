<?php
global $_W;
$weid=$_W['uniacid'];
$data=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text'],['value']);
if(empty($data))
{
    $data=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'text'],['value']);
}
include $this->template('rule');
?>