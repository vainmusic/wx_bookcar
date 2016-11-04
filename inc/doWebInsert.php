<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];//获取当前公众号ID
//获取配置管理页面输入的price text 数据
$p=$_GPC['price'];
$t=$_GPC['text'];

//获取当前公众号的配置
$price=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'price']);
$text=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text']);
if(!empty($price)){     //
    $data = array(
        'value'=>$p
    );
    $condition=[
        'name'=>'price',
        'weid'=>$weid
    ];
      $result = pdo_update('wx_bookcar_config', $data,$condition); //存在则跟新存在的数据
}else {
        $user_data = array(
        'value'=>$p,
    	'weid' =>$weid,
    	'name'=>'price'
    );
      $result = pdo_insert('wx_bookcar_config', $user_data); //不存在则插入一条新数据
}
if(!empty($text)){
    $data = array(
        'value'=>$t
    );
    $condition=[
        'name'=>'text',
        'weid'=>$weid
    ];
      $result = pdo_update('wx_bookcar_config', $data,$condition); //存在则跟新存在的数据
}else{
    $user_data = array(
        'value'=>$t,
    	'weid' =>$weid,
        'name'=>'text'
    );
      $result = pdo_insert('wx_bookcar_config', $user_data); //不存在则插入一条新数据
}

    	   	message('修改成功！', '../../web/' .  $this->createWebUrl('config'));  //提示成功，跳转
?>