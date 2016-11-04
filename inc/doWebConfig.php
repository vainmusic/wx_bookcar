<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];//获取当前公众号ID
//获取配置管理页面输入的price text 数据
$p=$_GPC['price'];
$t=$_GPC['text'];
//判断当前公众号是否存在配置 
$price=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'price'],['value']);
$text=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text'],['value']);
if($price==null){
    $price=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'price'],['value']);//未存在则获取默认配置，
    $data['price']=$price['value'];
}else{             
    $data['price']=$price['value'];  //以存在着获取存在配置，显示在配置项页面
}
if($text==null){   
    $text=pdo_get('wx_bookcar_config',['weid'=>-1,'name'=>'text'],['value']);//未存在则获取默认配置，
    $data['text']=$text['value'];
}else{
    $data['text']=$text['value'];//以存在着获取存在配置，显示在配置项页面
}


 
 include $this->template('config');
?>