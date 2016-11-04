<?php
global $_W;
//这个操作被定义用来呈现 功能封面
$openid=$_W['openid'];// 获取当前openID 
$weid=$_W['uniacid'];// 获取当前公众号ID 
$timestamp=$_W['timestamp'];//获取当前时间
/*if(!empty($openid)){*/    //判断是否是微信端登录
    $data_user=[
        'weid'=>$weid,
        ];
         $datas=pdo_getall('wx_bookcar_drivers',$data_user); // 查询司机列表
         
        // var_dump($datas);
        // die();
         
    $updateTime=pdo_getall('wx_bookcar_drivers',$data_user,['update_time']);//获取当前用户更新时间   
    //为司机表每条数据添加一个时间差字段
    $length=count($updateTime);
    for($i=0;$i<$length;$i++){
       $newtime= strtotime($updateTime[$i]['update_time']); 
       $disparity=($timestamp-$newtime)/60;                  //获取时间差
        if($disparity>=0&&$disparity<30){

            $new[$i]=[
                'name'=>$datas[$i]['name'],
                'id'=>$datas[$i]['open_id'],
                'path'=>$datas[$i]['onep'],
                'longitude'=>$datas[$i]['longitude'],
                'latitude'=>$datas[$i]['latitude'],
                'disparity'=>10,
                ];
        }else if($disparity>=30&&$disparity<60){
                $new[$i]=[
                'name'=>$datas[$i]['name'],
                'id'=>$datas[$i]['open_id'],
                'path'=>$datas[$i]['onep'],
                'longitude'=>$datas[$i]['longitude'],
                'latitude'=>$datas[$i]['latitude'],
                'disparity'=>30,
                ];

        }else if($disparity>=60&&$disparity<70){
                        $new[$i]=[
                'name'=>$datas[$i]['name'],
                'id'=>$datas[$i]['open_id'],
                'path'=>$datas[$i]['onep'],
                'longitude'=>$datas[$i]['longitude'],
                'latitude'=>$datas[$i]['latitude'],
                'disparity'=>60,
                ];

        }else {      
            
        }
    }
        
        $id=pdo_getall('wx_bookcar_drivers',[
            'open_id'=>$openid
        ],['open_id']);
        include $this->template('index');
/*}else {
    echo " 该平台只能在微信端打开";
}*/
?>