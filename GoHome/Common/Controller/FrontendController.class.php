<?php
//-----------------
// 前端页面基类
//-----------------
namespace Common\Controller;
use Think\Controller;
class FrontendController extends Controller {

	/* 空操作，用于输出404页面 */
	public function _empty(){
		$this->redirect('Index/index');
	}


    protected function _initialize(){
        header('Content-Type:text/html; charset='.C('SITE_CHARSET'));
        /* 读取站点配置 */
        if (false === $config =  F('config')) {
            $config = api('Config/lists');
        }
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            //$this->error('站点已经关闭，请稍后访问~');
            $this->show('站点已经关闭，请稍后访问~');
        }
    }


}
