<?php

// 示例的全局数据库配置文件
return array(
    'URL_MODEL'=>2, // 如果你的环境不支持PATHINFO 请设置为3
    'DB_TYPE'                   =>'mysql',
    'DB_HOST'                   =>'localhost',
    'DB_NAME'                   =>'yuqing',//数据库
    'DB_USER'                   =>'root',
    'DB_PWD'                    =>'',
    'DB_PORT'                   =>'3306',
    'DB_PREFIX'                 =>'think_',  //表前缀      
    //'DEFAULT_GROUP'             =>'main',
    //'APP_GROUP_LIST'            =>'main,admin',
	'TMPL_FILE_DEPR'            =>'_',
    'SHOW_PAGE_TRACE'           =>1,//显示调试信息
);

?>