<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>舆情监测系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/yuqing/app/tpl/content/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/yuqing/app/tpl/Content/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="/yuqing/app/tpl/Content/css/unicorn.main.css" />
    <link rel="stylesheet" type="text/css" href="/yuqing/app/tpl/Content/css/unicorn.grey.css" />
    <link rel="stylesheet" type="text/css" href="/yuqing/app/tpl/Content/css/default.css" />
    <script type="text/javascript" src="/yuqing/app/tpl/Content/js/jquery.min.js"></script>
</head>
<body>
    <!-- logo -->
    <div id="header">
        <h1>
        </h1>
    </div>
    <!-- topbar -->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav btn-group">
            <li class="btn btn-inverse dropdown" id="menu-profile"><a title="" href="#" data-toggle="dropdown"
                data-target="#menu-profile" class="dropdown-toggle"><i class="icon icon-user"></i>
                <span class="text">Huang shan </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon icon-list-alt"></i>个人资料</a></li>
                    <li><a href="#"><i class="icon icon-lock"></i>安全设置</a></li>
                    <li><a href="#"><i class="icon icon-off"></i>退出系统</a></li>
                </ul>
            </li>
            <li class="btn btn-inverse"><a href="#"><i class="icon icon-envelope"></i><span class="text">
                重要信息</span> <span class="label label-important">5</span></a> </li>
        </ul>
    </div>
    <!-- 导航 -->
    <div id="sidebar">
    <ul>
        <li id="li_home"><a href="/yuqing/"><i class="icon icon-home"></i><span>
            起始页</span></a></li>
        <li id="li_mdata" class="submenu"><a href="#"><i class="icon icon-th-list"></i><span>监测数据</span><span
            class="label">4</span></a>
            <ul>
                <li><a href="#">舆情查看</a></li>
                <li><a href="#">热点查看</a></li>
                <li><a href="#">简报生成</a></li>
            </ul>
        </li>
        <li id="li_mset" class="submenu"><a href="#"><i class="icon icon-th"></i><span>监测设置</span></a>
            <ul>
                <li><a href="/yuqing/index.php/MonitorSet/monitorSites">监测网站</a></li>
                <li><a href="/yuqing/index.php/MonitorSet/blackWords">系统黑词</a></li>
            </ul>
        </li>
        <li id="li_alarm" class="submenu"><a href="#"><i class="icon icon-bell"></i><span>系统预警</span></a>
            <ul>
                <li><a href="/yuqing/index.php/SystemAlarm/index">预警信息</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/alarmSet">预警设置</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/smsList">预警短信</a></li>
                <li><a href="/yuqing/index.php/SystemAlarm/mailList">预警邮箱</a></li>
            </ul>
        </li>
        <li id="li_user" class="submenu"><a href="#"><i class="icon icon-user"></i><span>个人中心</span></a>
            <ul>
                <li><a href="/yuqing/index.php/Account/profile">个人资料</a></li>
                <li><a href="/yuqing/index.php/Account/security">安全设置</a></li>
            </ul>
        </li>
        <li id="li_system" class="submenu"><a href="#"><i class="icon icon-wrench"></i><span>系统管理</span></a>
            <ul>
                <li><a href="/yuqing/index.php/SystemManage/userManage">用户管理</a></li>
                <li><a href="">系统设置</a></li>
            </ul>
        </li>
    </ul>
</div>
    <!-- 内容 -->
    <div id="content"><!-- 内容页标题 -->
<div id="content-header">
    <h1>
        人员管理</h1>
</div>
<!-- 导航 -->
<div id="breadcrumb">
    <a href="/yuqing" class="tip-bottom"><i class="icon-home"></i>起始页</a> <a href="javascript:">
        系统管理</a> <a href="/yuqing/index.php/SystemManage/userManage">人员管理</a> <a href="javascript:"
            class="current">编辑</a>
</div>
<!-- 内容 -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon"><i class="icon-user"></i></span>
                    <h5>
                        编辑</h5>
                    <h5 class="float-right red">
                        *为必填</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="pwdform" class="form-horizontal" action="" method="post">
                    <div class="control-group">
                        <label class="control-label">
                            账户
                        </label>
                        <div class="controls">
                            <input type="text" disabled="disabled" value="Huang shan" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            姓 名 <span class="mark">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" placeholder="请输入姓名" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            密 码 <span class="mark">*</span>
                        </label>
                        <div class="controls">
                            <input type="password" name="newpwd" id="txtnewpwd" class="{required:true}" placeholder="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            确认密码 <span class="mark">*</span>
                        </label>
                        <div class="controls">
                            <input type="password" name="confirm" class="{required:true,equalTo:'#txtnewpwd'}"
                                placeholder="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            电 话
                        </label>
                        <div class="controls">
                            <input type="text" placeholder="请使用手机号以便接收系统短信" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            邮 箱 <span class="mark">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" placeholder="例 mail@gmail.com" />
                            <label class="help-block">
                                请使用常用邮箱作为系统邮箱</label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">
                            启 用
                        </label>
                        <div class="controls">
                            <input type="checkbox" />
                        </div>
                    </div>
                    <div class="form-actions">
                        <a href="/yuqing/index.php/SystemManage/userManage" class="btn btn-primary">返回</a>
                        <input id="next" class="btn btn-primary" type="submit" value="保存" />
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#li_system').addClass('open active');
    });
</script></div>
    
    <!-- Footer -->
    <div class="row-fluid">
        <div id="footer" class="span12" style="margin-top: 25px; color: #eeeeee">
            2013 &copy; 重庆特晟科技有限责任公司
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/jquery.ui.custom.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/jquery.peity.min.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/jquery.flot.min.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/unicorn.js"></script>
<script type="text/javascript" src="/yuqing/app/tpl/Content/js/unicorn.dashboard.js"></script>