<?php
//获取图片上传的所以信息
global $_W,$_GPC;
$weid=$_W['uniacid'];
$openid=$_W['openid'];
 $filename=$_FILES['pfile']['name'];
 $filename2=$_FILES['pfile2']['name'];
 $filename3=$_FILES['pfile3']['name'];
 $type=$_FILES['pfile']['type'];
 $tmp_name=$_FILES['pfile']['tmp_name'];
 $tmp_name2=$_FILES['pfile2']['tmp_name'];
 $tmp_name3=$_FILES['pfile3']['tmp_name'];
 $size=$_FILES['pfile']['size'];
 $error=$_FILES['pfile']['error'];
 //判断选择几张图片 ，上传几张图片
 if(!empty($filename)){
  $timestamp=time();
 $time=date('Y-m-d H:i:s', $timestamp);//将当前时间戳转化为时间格式
$qz=$timestamp- intval($timestamp/10000)*10000;//获得随机图片前缀
 $path='a'.$qz.$filename;
 move_uploaded_file($tmp_name,"../addons/wx_bookcar/template/picture/".$path);//把图片信息保存到服务器上
 $data['onep'] =$path;
     
 }
 if(!empty($filename2)){
    $timestamp=time();
    $time=date('Y-m-d H:i:s', $timestamp);//将当前时间戳转化为时间格式
    $qz=$timestamp- intval($timestamp/10000)*10000;//获得随机图片前缀
    $path2='b'.$qz.$filename2;
 move_uploaded_file($tmp_name2,"../addons/wx_bookcar/template/picture/".$path2);//把图片信息保存到服务器上
  $data['twop'] =$path2;
     
 }
 if(!empty($filename3)){
      $timestamp=time();
 $time=date('Y-m-d H:i:s', $timestamp);//将当前时间戳转化为时间格式
$qz=$timestamp- intval($timestamp/10000)*10000;//获得随机图片前缀
 $path3='c'.$qz.$filename3;
  move_uploaded_file($tmp_name3,"../addons/wx_bookcar/template/picture/".$path3);//把图片信息保存到服务器上
 $data['threep'] =$path3;
     
 } 
$condition=[
        'open_id'=>$openid,
        'weid'=>$weid
    ];
      $result = pdo_update('wx_bookcar_drivers', $data,$condition); //存在则跟新存在的数据
        message('图片保存成功！', '../../app/' . $this->createMobileUrl('updata'), 'success');
     
 ?>