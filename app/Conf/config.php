<?php
$config	= require 'config.php';
$array=array(
	//'配置项'=>'配置值'
	'LAYOUT_ON' => true,
	'LAYOUT_NAME' => 'layout',
	'TMPL_FILE_DEPR'            =>'/',
	'DEFAULT_THEME'             => 'default',
	'DEFAULT_CHARSET'           => 'utf8',
    'URL_MODEL'                 =>3,
    'USER_AUTH_GATEWAY'         =>'/Public/login',// 默认认证网关
	'ADMIN_AUTH_GATEWAY'        =>'/index.php/admin/?m=Public&a=login',// 默认认证网关
    'VAR_PAGE'                  =>'page',
    'TMPL_ACTION_ERROR'         =>  'Public:success', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'       =>  'Public:success', // 默认成功跳转对应的模板文件

);
return array_merge($config,$array);
?>