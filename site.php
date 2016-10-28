<?php
/**
 * 微信约车模块微站定义
 *
 * @author DoubleWei
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Wx_bookcarModuleSite extends WeModuleSite {

    function __construct(){
       global $_W;
       // if(!$_W['openid'])die();
    }

	public function doMobileIndex() {
	    global $_W;
		//这个操作被定义用来呈现 功能封面
        $openid=$_W['openid'];
        
        //var_dump($openid);
        
        $weid=$_W['uniacid'];
        $timestamp=$_W['timestamp'];
        
        $result=pdo_getall('wx_bookcar_drivers',[
                'weid'=>$weid,
                'open_id'=>$openid,
            ]);
            
        if(count($result)<1){
            $result = pdo_insert('wx_bookcar_drivers', [
            'weid'=>$weid,
            'open_id'=>$openid,
            'create_time'=> date('Y-m-d H:i:s', $timestamp)
            ]);
        }
        
       

            
        //var_dump($result);


//var_dump(tablename('wx_bookcar_drivers'));
        

        include $this->template('index');
	}
    public function doMobileDriver() {
        //这个操作被定义用来呈现 功能封面
        include $this->template('driver');
    }

	public function doWebOrder() {
	    
	    var_dump(123);
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobilePersonal() {
		//这个操作被定义用来呈现 微站个人中心导航
	}



}