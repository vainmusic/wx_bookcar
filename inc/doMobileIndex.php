<?php


global $_W;
//这个操作被定义用来呈现 功能封面
$openid=$_W['openid'];

// var_dump($openid);

$weid=$_W['uniacid'];
$timestamp=$_W['timestamp'];
$datas=pdo_getall('wx_bookcar_drivers');

// foreach ($datas as &$data) {
// }


$id=pdo_getall('wx_bookcar_drivers',[
    'open_id'=>$openid
],['open_id']);




/*$result=pdo_getall('wx_bookcar_drivers',[
    'weid'=>$weid,
    'open_id'=>$openid,
]);

if(count($result)<1){
    $result = pdo_insert('wx_bookcar_drivers', [
        'weid'=>$weid,
        'open_id'=>$openid,
        'create_time'=> date('Y-m-d H:i:s', $timestamp)
    ]);
}*/




//var_dump($result);


//var_dump(tablename('wx_bookcar_drivers'));


include $this->template('index');
?>