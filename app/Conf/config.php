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
);
return array_merge($config,$array);
?>