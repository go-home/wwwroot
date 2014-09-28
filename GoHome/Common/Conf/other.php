<?php
return array(
	'SHOW_PAGE_TRACE'		=>	false,
	/* 全局过滤配置 */
    'DEFAULT_FILTER' 		=> '', //全局过滤函数
	//错误设置
	'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
	'ERROR_PAGE'            =>  '', // 错误定向页面
	'SHOW_ERROR_MSG'        =>  false,    // 显示错误信息
	'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数
	//日志设置
	'LOG_RECORD'            =>  true,   // 默认不记录日志
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
	'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志

	//数据缓存设置
	'DATA_CACHE_TIME'       =>  0,      // 数据缓存有效期 0表示永久缓存
	'DATA_CACHE_COMPRESS'   =>  true,   // 数据缓存是否压缩缓存
	'DATA_CACHE_CHECK'      =>  false,   // 数据缓存是否校验缓存
	'DATA_CACHE_PREFIX'     =>  '',     // 缓存前缀
	'DATA_CACHE_TYPE'       =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
	'DATA_CACHE_PATH'       =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
	'DATA_CACHE_SUBDIR'     =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
	'DATA_PATH_LEVEL'       =>  1,        // 子目录缓存级别
);
?>