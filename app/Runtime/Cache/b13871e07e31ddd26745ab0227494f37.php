<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>舆情监测系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.main.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/unicorn.grey.css" />
    <link rel="stylesheet" type="text/css" href="../Public/css/default.css" />
    <script type="text/javascript" src="../Public/js/jquery.min.js"></script>
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
                <li><a href="BlackWords.html">系统黑词</a></li>
                <li><a href="#">系统设置</a></li>
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
                <li><a href="/yuqing/index.php/Profile">个人资料</a></li>
                <li><a href="Security.html">安全设置</a></li>
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
        人员管理</h1>
</div>
<!-- 导航 -->
<div id="breadcrumb">
    <a href="/yuqing" class="tip-bottom"><i class="icon-home"></i>起始页</a> <a href="javascript:">
        系统管理</a> <a href="javascript:" class="current">人员管理</a>
</div>
<!-- 内容 -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon"><i class="icon-user"></i></span>
                    <h5>
                        人员管理</h5>
                    <div class="buttons" style="margin-right: 15px;">
                        <a href="__ROOT__/index.php/SystemManage/userAdd" class="btn btn-success btn-mini"><i
                            class="icon-plus icon-white"></i>新增</a>
                    </div>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered">
                        <thead>
                        
                            <tr style="cursor: pointer;">
                                <th>
                                    账号
                                </th>
                                <th style="width: 13%">
                                    姓名
                                </th>
                                <th style="width: 25%">
                                    联系电话
                                </th>
                                <th style="width: 10%">
                                    状态
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td class="center">
                                    <?php echo ($vo["Account"]); ?>
                                </td>
                                <td class="center">
                                    <?php echo ($vo["Name"]); ?>
                                </td>
                                <td class="center">
                                    <?php echo ($vo["Mobile"]); ?>
                                </td>
                                <td class="center">
                                    <span class="label label-success"><?php if($vo['Status']==1){echo "正常";}else{echo "启用";} ?></span>
                                </td>
                                <td class="center">
                                    <a href="__ROOT__/index.php/SystemManage/userEdit/Id/<?php echo ($vo["Id"]); ?>" class="btn btn-mini">查看 / 编辑</a>
                                    <a href="__ROOT__/index.php/SystemManage/del/model/users/Id/<?php echo ($vo["Id"]); ?>" class="btn btn-danger btn-mini" onclick="cancelarticle(@item.Id)">
                                        删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
              </div>
                <div class="widget-title">
                    <div class="dataTables_paginate pull-right" style="line-height:26px;">
                        <?php echo ($page); ?>                  
                    </div>
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
<script type="text/javascript" src="../Public/js/jquery.ui.custom.js"></script>
<script type="text/javascript" src="../Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.peity.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.flot.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../Public/js/unicorn.js"></script>
<script type="text/javascript" src="../Public/js/unicorn.dashboard.js"></script>