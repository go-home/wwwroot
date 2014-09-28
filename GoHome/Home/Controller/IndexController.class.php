<?php
namespace Home\Controller;
use User\Api\UserApi;
#use Think\Controller;
class IndexController extends HomeController {
	public function _initialize() {
        parent::_initialize();
        $this->userApi = new UserApi;
    }
    public function index(){

    	
		//$uid = $User->register('nmtree1','123456','bobo.xiao1@nmtree.com');
		//$data['mobile'] = '13800138000';
		//$info = $User->updateInfo('5','123456',$data);
		//$info = $this->userApi->info(5);
		//print_r($info);
		/*
		$uid = $User->login('nmtree','123456');
		$Member = D('Member');
		if($Member->login($uid)){ //登录用户
			//TODO:跳转到登录前页面
			//$this->success('登录成功！',U('Home/Index/index'));
			$info = $User->info($uid);
			print_r($info);
		}
		*/
    	$this->assign('web_name',C('WEB_SITE_TITLE'));
        $this->display();
    }
}