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
	    
        require_once(dirname(__FILE__)."/inc/doMobileIndex.php");
	}
    public function doMobileDriver() {
        //这个操作被定义用来呈现 功能封面
        require_once(dirname(__FILE__)."/inc/doMobileDriver.php");
    }

	public function doWebOrder() {
	    
	    require_once(dirname(__FILE__)."/inc/doWebOrder.php");
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doWebConfig() {
	    
	    require_once(dirname(__FILE__)."/inc/doWebConfig.php");
		//这个操作被定义用来呈现 管理中心导航菜单
	}
		public function doWebInsert() {
	    
	    require_once(dirname(__FILE__)."/inc/doWebInsert.php");
		//这个操作被定义用来呈现 管理中心导航菜单
	}

	public function doMobilePersonal() {
		//这个操作被定义用来呈现 微站个人中心导航
		 require_once(dirname(__FILE__)."/inc/doMobilePersonal.php");
	}
	
	public function doMobileJoin(){
	    require_once(dirname(__FILE__)."/inc/doMobileJoin.php");
	}
	public function doMobileUpdata(){
	    require_once(dirname(__FILE__)."/inc/doMobileUpdata.php");
	}
	public function doMobileInsert(){
	    require_once(dirname(__FILE__)."/inc/doMobileInsert.php");
	}
	public function doMobileUppicture(){
	    require_once(dirname(__FILE__)."/inc/doMobileUppicture.php");
	}
	public function doMobileUpload(){
	        require_once(dirname(__FILE__)."/inc/doMobileUpload.php");
	}
		public function doMobileRule(){
	        require_once(dirname(__FILE__)."/inc/doMobileRule.php");
	}
	


    public function payResult($params) {
         require_once(dirname(__FILE__)."/inc/payResult.php");
        	
    }


}