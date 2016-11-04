<?php
global $_W,$_GPC;
$openid=$_W['openid'];
$weid=$_W['uniacid'];
$timestamp=$_W['timestamp'];
$value=$_GPC['value'];/*获取点击列表传过来的openid*/
/* 判断openid是否存在 */

if(!empty($value)){
   $data=pdo_get('wx_bookcar_drivers',[// 存在查找这个ID的数据 
    'open_id'=>$value,
]); 
}else {     //  不存在查单前用户的数据 
$data=pdo_get('wx_bookcar_drivers',[
    'open_id'=>$openid,
]);

}
if(!empty($openid)){
include $this->template('driver');
}else{
    echo "该平台只能在微信端打开";
}