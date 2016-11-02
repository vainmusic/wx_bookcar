<?php
global $_W,$_GPC;
$weid=$_W['uniacid'];
$operation=!empty($_GPC['op'])?$_GPC['op']:'display';
$status=$_GPC['status'];
$id=$_GPC['id'];
$phone=$_GPC['phone'];
$time=$_GPC['time'];
if($status==1){
    $condition['type']=0;
    $condition['weid']=$weid;
   if($id!=''){
   $condition['id']= $id;
    }
    if($phone!=''){
   $condition['phone']= $phone;
    }
     $datas=pdo_getall('wx_bookcar_order',$condition);
}elseif ($status==2) {
        $condition['type']=1;
        $condition['weid']=$weid;
   if($id!=''){
   $condition['id']= $id;
    }
    if($phone!=''){
   $condition['phone']= $phone;
    }
     $datas=pdo_getall('wx_bookcar_order',$condition);
}else{
    $condition = [];
    $condition['weid']=$weid;
    if($id!=''){
       $condition['id']= $id;
    }
    if($phone!=''){
       $condition['phone']= $phone;
    }
     $datas=pdo_getall('wx_bookcar_order',$condition);
}
include $this->template('order');
?>