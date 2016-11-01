<?php
global $_W,$_GPC;
// load()->func('tpl');
$operation=!empty($_GPC['op'])?$_GPC['op']:'display';
$status=$_GPC['status'];
$id=$_GPC['id'];
$phone=$_GPC['phone'];
$time=$_GPC['time'];



$condition = [];
if($id!=''){
   $condition['id']= $id;
}
if($phone!=''){
   $condition['phone']= $phone;
}

 $data=pdo_getall('wx_bookcar_order',$condition);
     
    var_dump($data);

// $data[0]=pdo_get('wx_bookcar_order',[
//       'id'=>$id
// ]);
// $data[1]=pdo_get('wx_bookcar_order',[
//     'phone'=>$phone
// ]);

// $data[2]=pdo_get('wx_bookcar_order',[
//     'creatTime'=>$time
// ]);
// if($data[1]==NUll){

// }
// for($i=0;$i<3;$i++){
//     if($data[$i]!=NUll){
//         $datas[$i]=$data[$i];
//     }
// }

var_dump($datas);


include $this->template('order');