<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];
$p=$_GPC['price'];
$t=$_GPC['text'];

$price=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'price'],['value']);
$text=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text'],['value']);
if($price==null){
    $price=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'price'],['value']);
    $data['price']=$price['value'];
}else{
    $data['price']=$price['value'];
}
if($text==null){
    $text=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'text'],['value']);
    $data['text']=$text['value'];
}else{
    $data['text']=$text['value'];
}


 
 include $this->template('config');
?>