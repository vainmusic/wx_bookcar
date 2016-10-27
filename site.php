<?php
/**
 * 微信约车模块微站定义
 *
 * @author DoubleWei
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Wx_bookcarModuleSite extends WeModuleSite {

	public function doMobileIndex() {
		//这个操作被定义用来呈现 功能封面
        include $this->template('index');
	}
    public function doMobileDriver() {
        //这个操作被定义用来呈现 功能封面
        include $this->template('driver');
    }

	public function doWebOrder() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobilePersonal() {
		//这个操作被定义用来呈现 微站个人中心导航
	}



}