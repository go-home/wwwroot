<?php
return array(
	'SITE_CHARSET'			=>	'UTF-8',
	'MODULE_ALLOW_LIST'    	=>   array('Home','Admin','User'),
	'DEFAULT_MODULE'       	=>   'Home',  // 默认模块
	'MODULE_DENY_LIST'   	=>	 array('Common','User','Admin','Install'),
	/* 系统数据加密设置 */
    'DATA_AUTH_KEY' 		=> 	'@/V.X8o+;:w~xqHdGe0O$|rgkC(!t9uSQ#J<z"5E', //默认数据加密KEY
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes',
    // 加载扩展配置文件
	'LOAD_EXT_CONFIG' 		=> 'url_config,db_config,other',
    //二级域名配置参数
    'APP_SUB_DOMAIN_DEPLOY'   =>    0, // 开启子域名配置
	'APP_SUB_DOMAIN_RULES'    =>    array(   
	    'admin.go-home.cn'  => 'Admin',  // admin.domain1.com域名指向Admin模块
	    'test.go-home.cn'   => 'Test',  // test.domain2.com域名指向Test模块
	),
	//表单令牌验证相关的配置参数
	'TOKEN_ON'      =>    false,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true

	//Cookie设置
	'COOKIE_EXPIRE'         =>  0,    // Cookie有效期
	'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
	'COOKIE_PATH'           =>  '/',     // Cookie路径
	'COOKIE_PREFIX'         =>  '',      // Cookie前缀 避免冲突
	'COOKIE_HTTPONLY'       =>  '',     // Cookie的httponly属性 3.2.2新增
	'DB_TYPE'   			=> 'mysql', // 数据库类型


);