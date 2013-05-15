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
    <div id="content"><div id="content-header">
    <h1>
        预警信息</h1>
</div>
<!-- 导航 -->
<div id="breadcrumb">
    <a href="/yuqing" class="tip-bottom"><i class="icon-home"></i>起始页</a> <a href="javascript:">
        系统管理</a> <a href="javascript:" class="current">预警信息</a>
</div>
<!-- 内容 -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon"><i class="icon-info-sign"></i></span>
                    <h5>
                        预警信息</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="cursor: pointer;">
                                <th>
                                    信息
                                </th>
                                <th style="width: 10%">
                                    等级
                                </th>
                                <th style="width: 10%">
                                    状态
                                </th>
                                <th style="width: 15%">
                                    时间
                                </th>
                                <th style="width: 10%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    XX网站出现高危黑词"XXX, XXX, XXX"
                                </td>
                                <td class="center red">
                                    紧急
                                </td>
                                <td class="center">
                                    <span class="label label-warning">报警中</span>
                                </td>
                                <td class="center">
                                    2013-5-15 15:24:22
                                </td>
                                <td class="center">
                                    <a href="/yuqing/index.php/SystemAlarm/alarmDetail" class="btn btn-mini">详细</a>
                                    <a href="" class="btn btn-primary btn-mini">处理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    XX网站出现高危黑词"XXX, XXX, XXX"
                                </td>
                                <td class="center red">
                                    紧急
                                </td>
                                <td class="center">
                                    <span class="label label-warning">报警中</span>
                                </td>
                                <td class="center">
                                    2013-5-15 15:24:22
                                </td>
                                <td class="center">
                                    <a href="" class="btn btn-mini">详细</a>
                                    <a href="" class="btn btn-primary btn-mini">处理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    XX网站出现高危黑词"XXX, XXX, XXX"
                                </td>
                                <td class="center red">
                                    紧急
                                </td>
                                <td class="center">
                                    <span class="label">已处理</span>
                                </td>
                                <td class="center">
                                    2013-5-15 15:24:22
                                </td>
                                <td class="center">
                                    <a href="" class="btn btn-mini">详细</a>
                                    <a href="" class="btn btn-primary btn-mini disabled">处理</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    XX网站出现高危黑词"XXX, XXX, XXX"
                                </td>
                                <td class="center">
                                    常规
                                </td>
                                <td class="center">
                                    
                                    <span class="label">已处理</span>
                                </td>
                                <td class="center">
                                    2013-5-15 15:24:22
                                </td>
                                <td class="center">
                                    <a href="" class="btn btn-mini">详细</a>
                                    <a href="" class="btn btn-primary btn-mini disabled">处理</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="widget-title">
                    <div class="dataTables_paginate pull-right">
                        <a class="fg-button ui-button" href="/workspace/magazine/article?group=0&amp;page=0">
                            首页</a><a class="previous ui-button ui-state-disabled" href="javascript:;">上一页</a><a
                                class="previous ui-button ui-state-disabled" href="javascript:;">下一页</a><a class="fg-button ui-button"
                                    href="/workspace/magazine/article?group=0&amp;page=-1">末页</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#li_alarm').addClass('open active');
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