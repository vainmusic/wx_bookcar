<?php
/**
 * 微信约车模块处理程序
 *
 * @author DoubleWei
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Wx_bookcarModuleProcessor extends WeModuleProcessor
{
    public function respond()
    {
        $content = $this->message['content'];
        //这里定义此模块进行消息处理时的具体过程, 请查看微擎文档来编写你的代码
        return $this->respNews(array(
            'Title' => 微信约车,
            'Description' => 要出行就点我吧,
            'PicUrl' => tomedia(),
            'Url' =>$this->createMobileUrl('index'),
        ));
    }
}