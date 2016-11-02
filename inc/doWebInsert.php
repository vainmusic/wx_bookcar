<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];
$p=$_GPC['price'];
$t=$_GPC['text'];
$price=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'price']);
$text=pdo_get('wx_bookcar_config',['weid'=>$weid,'name'=>'text']);
if(!empty($price)){
    $data = array(
        'value'=>$p
    );
    $condition=[
        'name'=>'price',
        'weid'=>$weid
    ];
      $result = pdo_update('wx_bookcar_config', $data,$condition);
}else {
        $user_data = array(
        'value'=>$p,
    	'weid' =>$weid,
    	'name'=>'price'
    );
      $result = pdo_insert('wx_bookcar_config', $user_data);
}
if(!empty($text)){
    $data = array(
        'value'=>$t
    );
    $condition=[
        'name'=>'text',
        'weid'=>$weid
    ];
      $result = pdo_update('wx_bookcar_config', $data,$condition);
}else{
    $user_data = array(
        'value'=>$t,
    	'weid' =>$weid,
        'name'=>'text'
    );
      $result = pdo_insert('wx_bookcar_config', $user_data);
}

    	   	message('修改成功！', '../../web/' .  $this->createWebUrl('config'));
?>