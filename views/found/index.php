<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<!-- saved from url=(0045)http://www.campusapp.com.cn/m_lost/lost/index -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyword" content="移动校园智慧平台">
        <meta name="description" content="移动校园智慧平台">

        <title>公众号管理-移动校园智慧平台</title>
        <link rel="shortcut icon" href="http://www.campusapp.com.cn/images/favicon_sdtech.ico" type="image/x-icon">

        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/jquery-ui-1.10.4.custom.min.css">
        <!--link type="text/css" rel="stylesheet" href="http://www.campusapp.com.cn/madmin/style1/vendors/font-awesome/css/font-awesome.min.css"-->
        <link rel="stylesheet" href="./失物招领列表_files/linecons.css">
        <link rel="stylesheet" href="./失物招领列表_files/font-awesome.min.css">
        <link rel="stylesheet" href="./失物招领列表_files/elusive.css">

        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/bootstrap.min.css">
        <!--LOADING STYLESHEET FOR PAGE-->
      <!--   <link type="text/css" rel="stylesheet" href="http://www.campusapp.com.cn/madmin/style1/vendors/intro.js/introjs.css">
        <link type="text/css" rel="stylesheet" href="http://www.campusapp.com.cn/madmin/style1/vendors/calendar/zabuto_calendar.min.css"> -->
        <!--Loading style vendors-->
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/animate.css">
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/pace.css">
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/all.css">
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/jquery.news-ticker.css">
        <!--Loading style-->
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/yellow-blue.css">
        <link type="text/css" rel="stylesheet" href="./失物招领列表_files/style-responsive.css">
        <link rel="stylesheet" href="./失物招领列表_files/data.css">
        <link rel="stylesheet" href="./失物招领列表_files/styles.css">
        <link rel="stylesheet" href="./失物招领列表_files/my-style.css">
        <link rel="stylesheet" href="./失物招领列表_files/alertbox.css">
            <link rel="stylesheet" href="./失物招领列表_files/activity.css">
                <script type="text/javascript" src="./失物招领列表_files/jquery-1.11.1.min.js.下载"></script>
        <script src="./失物招领列表_files/bootstrap.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/jquery-migrate-1.2.1.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/jquery-ui.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/warnUtil.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/checkUtil.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/plupload.full.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/upload.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/bootstrap-datetimepicker.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/bootstrap-datetimepicker.zh-CN.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/WdatePicker.js.下载"></script><link href="./失物招领列表_files/WdatePicker.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" charset="utf-8" src="./失物招领列表_files/ueditor.config.js.下载"></script>
        <script type="text/javascript" charset="utf-8" src="./失物招领列表_files/ueditor.all.min.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/jquery.md5.js.下载"></script>
        <script type="text/javascript" src="./失物招领列表_files/baiduTemplate.js.下载"></script>
                    <style id="holderjs-style" type="text/css"></style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
    <body class="page-body sidebar-colors   pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>


        <!-- 隐藏的设置面板 - begin -->
  <div id="header-topbar-option-demo" class="page-header-topbar">
    <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                <span class="sr-only">菜单切换</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" href="http://www.campusapp.com.cn/" class="navbar-brand" style="padding: 8px;">
                <span class="fa fa-rocket"></span>
                                <span class="logo-text"><img src="./失物招领列表_files/sdtech-logo-white.png"></span>
                                <span style="display: none" class="logo-text-icon"></span>
            </a>
        </div>
        <div class="topbar-main"><a id="menu-toggle" href="javascript:void(0)" class="hidden-xs"><i class="fa fa-bars"></i></a>
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                                 <li class="hidden-xs">
                    <a class="btn-chat" target="_blank" href="http://www.campusapp.com.cn/html/ulog/index.html">
                        <span class="ulog-tip ulog">更新日志</span>
                    </a>
                </li>
                <li class="dropdown topbar-user">
                    <a data-hover="dropdown" href="javascript:void(0);" class="dropdown-toggle">
                        <img src="./失物招领列表_files/205106085.jpg" alt="头像" class="img-responsive img-circle">&nbsp;
                        <span class="hidden-xs">戴游宇</span>&nbsp;
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user pull-right">
                        <li>
                            <a href="http://www.campusapp.com.cn/backend/info/index.html">
                                <i class="fa fa-user"></i>
                                个人资料
                            </a>
                        </li>
                        <li>
                            <a href="http://www.campusapp.com.cn/backend/change-pass/index.html">
                                <i class="fa fa-key"></i>
                                修改密码
                            </a>
                        </li>
                        <li>
                            <a href="http://www.campusapp.com.cn/backend/operate-log/index.html">
                                <i class="fa fa-file-text-o"></i>
                                查看日志
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs">
                 <!--    <a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a> -->
                    <a class="btn-chat" href="http://www.campusapp.com.cn/backend/login/logout.html">
                        <i class="fa fa-sign-out"></i>退出
                    </a>
                </li>
                            </ul>
        </div>
    </nav>
    <!--BEGIN MODAL CONFIG PORTLET-->
    <div id="modal-config" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 class="modal-title">Modal title</h4></div>
                <div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie. Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor vitae quam dictum
                    condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut ultricies felis.</p></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--END MODAL CONFIG PORTLET-->
</div>
   
        <!-- 隐藏的设置面板 - end -->


        <!-- 主页面 - begin -->
        <div id="wrapper">

            <!-- 左侧导航栏 - begin -->
  <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side" style="min-height: 100%;">
    <div class="sidebar-collapse menu-scroll" style="height: auto;">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                
                    <div class="thumb">
                        <img src="./失物招领列表_files/205106085.jpg" alt="头像" class="img-circle">
                    </div>
                    <div class="info">
                        <p>戴游宇</p>
                        <span class="label label-success">Developer</span>                    </div>
                                <!-- <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" alt="" class="img-circle"/></div> -->
                <!-- <div class="info"><p>John Doe</p>
                     <ul class="list-inline list-unstyled">
                        <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                        <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="javascript:void(0)" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                        <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div> -->
                <div class="clearfix"></div>
            </li>
            <!-- 返回上一级 begin -->
                                    <!-- 返回上一级 end -->
            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-weixin fa-fw fa"><div class="icon-bg" style="background-color:#E9662C"></div></i><span class="menu-title">微信管理</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="my_btn">
        <a style="" href="http://www.campusapp.com.cn/m_wechat/corp.html"><i></i><span class="submenu-title">企业号</span></a></li><li class="my_btn">
        <a style="" href="http://www.campusapp.com.cn/m_wechat/mp.html"><i></i><span class="submenu-title">公众号</span></a></li></ul></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/m_website.html"><i class="fa-globe fa-fw fa"><div class="icon-bg" style="background-color:#BF3773"></div></i><span class="menu-title">微站群</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/news.html"><i class="fa-cube fa-fw fa"><div class="icon-bg" style="background-color:#1C9EBB"></div></i><span class="menu-title">素材管理</span></a></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-puzzle-piece fa-fw fa"><div class="icon-bg" style="background-color:#24A568"></div></i><span class="menu-title">校园互动</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/form/index.html"><i></i><span class="submenu-title">万能表单</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_poll.html"><i></i><span class="submenu-title">投票</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_wishtree/default.html"><i></i><span class="submenu-title">许愿树</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/answer/index.html"><i></i><span class="submenu-title">答题</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/survey/index.html"><i></i><span class="submenu-title">测评</span></a></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">抽奖</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/lottery/mp/turntable/index.html"><i></i><span class="submenu-title">幸运大转盘</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/lottery/mp/scratch-card/index.html"><i></i><span class="submenu-title">刮刮卡</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/lottery/mp/hiteggs/index.html"><i></i><span class="submenu-title">砸金蛋</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/lottery/mp/turntable/home.html"><i></i><span class="submenu-title">抽奖设置</span></a></li></ul></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/topic/index.html"><i></i><span class="submenu-title">话题</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/promise/index.html"><i></i><span class="submenu-title">承诺书</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_chat.html"><i></i><span class="submenu-title">聊天</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-laptop fa-fw fa"><div class="icon-bg" style="background-color:#AF31E0"></div></i><span class="menu-title">发布中心</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/matrix.html"><i></i><span class="submenu-title">矩阵</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/history/index.html"><i></i><span class="submenu-title">校史</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/scene/mp/album/index.html"><i></i><span class="submenu-title">场景画册</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/media/mp/album/index.html"><i></i><span class="submenu-title">校园图集</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/media/mp/category/index.html"><i></i><span class="submenu-title">校园视频</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/schedule/index.html"><i></i><span class="submenu-title">日程管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/address-list/index.html"><i></i><span class="submenu-title">校园通讯录</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/radio/index.html"><i></i><span class="submenu-title">校园电台</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/qrcode/backend/index.html"><i></i><span class="submenu-title">二维码</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/map/index.html"><i></i><span class="submenu-title">校园地图</span></a></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">微博聚合</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/weibo-setting/index.html"><i></i><span class="submenu-title">微博设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/weibo-manage/index.html"><i></i><span class="submenu-title">微博管理</span></a></li></ul></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">常用文件</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/exel/index.html"><i></i><span class="submenu-title">表格管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/exel-self/index.html"><i></i><span class="submenu-title">自定义内容</span></a></li></ul></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/meeting.html"><i></i><span class="submenu-title">会表</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/form.html"><i></i><span class="submenu-title">通用表格</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/extensions/mp/schoolbus/index.html"><i></i><span class="submenu-title">班车</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/miniprogram/mp/cms/index.html"><i></i><span class="submenu-title">小程序cms</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-codepen fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">业务中心</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">二维码扫描</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_qrcode/checkin/index.html"><i></i><span class="submenu-title">签到考勤</span></a></li></ul></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/features/backend/seats/index.html"><i></i><span class="submenu-title">礼堂选座</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/features/backend/course/index.html"><i></i><span class="submenu-title">课程管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/activity/mp/tickets.html"><i></i><span class="submenu-title">活动抢票</span></a></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">迎新离校系统</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/leave/backend/issue.html"><i></i><span class="submenu-title">迎新离校项目</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/leave/backend/section.html"><i></i><span class="submenu-title">迎新离校环节</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/leave/backend/index.html"><i></i><span class="submenu-title">学生管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/leave/backend/user.html"><i></i><span class="submenu-title">各环节处理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/leave/backend/stat.html"><i></i><span class="submenu-title">统计</span></a></li></ul></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">签到</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/school-room.html"><i></i><span class="submenu-title">课堂签到</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/actions.html"><i></i><span class="submenu-title">活动签到</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/checkin.html"><i></i><span class="submenu-title">定点签到</span></a></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">摇一摇</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/yao-checkin.html"><i></i><span class="submenu-title">摇一摇签到</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/yao-device.html"><i></i><span class="submenu-title">摇一摇设备</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_checkin/classes.html"><i></i><span class="submenu-title">大课考勤</span></a></li></ul></li></ul></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-credit-card fa-fw fa"><div class="icon-bg" style="background-color:#f2994b"></div></i><span class="menu-title">支付中心</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">对账中心</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/payment/total-bill.html"><i></i><span class="submenu-title">详细结算表</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/payment/clear-bill.html"><i></i><span class="submenu-title">每日结算查询</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/payment/depart-bill.html"><i></i><span class="submenu-title">结算总表查询</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/payment/detail-bill.html"><i></i><span class="submenu-title">交易订单查询 </span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/payment/custom-bill.html"><i></i><span class="submenu-title">自定义查询</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/refund/index.html"><i></i><span class="submenu-title">退款订单查询</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/refund/apply.html"><i></i><span class="submenu-title">订单退款</span></a></li></ul></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">订单中心</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/order/index.html"><i></i><span class="submenu-title">订单流水</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/order/stats.html"><i></i><span class="submenu-title">订单统计</span></a></li></ul></li><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">外语考试</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/fees.html"><i></i><span class="submenu-title">项目设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/rules.html"><i></i><span class="submenu-title">互斥设置</span></a></li></ul></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/project/index.html"><i></i><span class="submenu-title">杂项收费</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/type/index.html"><i></i><span class="submenu-title">收费类别</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/pay/backend/password/index.html"><i></i><span class="submenu-title">支付密码</span></a></li></ul></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/m_repair/default.html"><i class="fa-wrench fa-fw fa"><div class="icon-bg" style="background-color:#1C9EBB"></div></i><span class="menu-title">报修系统</span></a></li>            <li class="active">
        <a style="" href="http://www.campusapp.com.cn/m_lost/lost.html"><i class="fa-tags fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">失物招领</span></a></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-shopping-cart fa-fw fa"><div class="icon-bg" style="background-color:#BF3773"></div></i><span class="menu-title">跳蚤市场</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_fleamarket/default/index.html"><i></i><span class="submenu-title">商品列表</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_fleamarket/default/list.html?type=cate"><i></i><span class="submenu-title">分类管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_fleamarket/default/list.html?type=area"><i></i><span class="submenu-title">区域管理</span></a></li></ul></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/m_excel/project/index.html"><i class="fa-table fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">万能表格</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/chat/mp/auth/index.html"><i class="fa-comments-o fa-fw fa"><div class="icon-bg" style="background-color:#24A568"></div></i><span class="menu-title">群聊</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/notice/backend/notice.html"><i class="fa-bullhorn fa-fw fa"><div class="icon-bg" style="background-color:#5c89b8"></div></i><span class="menu-title">校内通知</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/m_conference/default.html"><i class="fa-bell-o fa-fw fa"><div class="icon-bg" style="background-color:#5c89b8"></div></i><span class="menu-title">会议通知</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/sms/backend/index.html"><i class="fa-share-alt fa-fw fa"><div class="icon-bg" style="background-color:#AF31E0"></div></i><span class="menu-title">统一消息管理</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/smcenter/backend/channel.html"><i class="fa-comments fa-fw fa"><div class="icon-bg" style="background-color:#f25a6b"></div></i><span class="menu-title">消息订阅中心</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/rss/backend/rss.html"><i class="fa-rss-square fa-fw fa"><div class="icon-bg" style="background-color:#c875cb"></div></i><span class="menu-title">rss订阅中心</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/article.html"><i class="fa-newspaper-o fa-fw fa"><div class="icon-bg" style="background-color:#DA494B"></div></i><span class="menu-title">校园新闻</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/discuss/index.html"><i class="fa-comment fa-fw fa"><div class="icon-bg" style="background-color:#1C9EBB"></div></i><span class="menu-title">评论</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/func.html"><i class="fa-magic fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">定制功能列表</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/uc/backend/structure/index.html"><i class="fa-sitemap fa-fw fa"><div class="icon-bg" style="background-color:#ffc34c"></div></i><span class="menu-title">组织人员管理</span></a></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/aggregate/backend/application/index.html"><i class="fa-th fa-fw fa"><div class="icon-bg" style="background-color:#3abff7"></div></i><span class="menu-title">APP</span></a></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-tags fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">第三方应用</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="javascript:void(0);"><i></i><span class="submenu-title">深澜接口</span><span class="fa arrow"></span></a><ul class="nav nav-third-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_srun/srun.html"><i></i><span class="submenu-title">配置接口</span></a></li></ul></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-tags fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">停飞测试</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment.html"><i></i><span class="submenu-title">人员授权</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/default/critical.html"><i></i><span class="submenu-title">警示分数线</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/examine/index.html"><i></i><span class="submenu-title">处分审批</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/student/index.html"><i></i><span class="submenu-title">学生列表</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/student/record.html"><i></i><span class="submenu-title">违纪记录</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/stopfly/appeal.html"><i></i><span class="submenu-title">停飞审批</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_punishment/stopfly/index.html"><i></i><span class="submenu-title">停飞通知</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-tags fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">值班表测试</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_rota/rota/index.html"><i></i><span class="submenu-title">值班表设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_rota/rota/auth.html"><i></i><span class="submenu-title">值班人员设置</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-dashboard fa-fw fa"><div class="icon-bg" style="background-color:#E9662C"></div></i><span class="menu-title">配置中心</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/app-center/index.html"><i></i><span class="submenu-title">应用中心</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/configure/index.html"><i></i><span class="submenu-title">参数设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/school-calendar/index.html"><i></i><span class="submenu-title">学期设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/holiday/index.html"><i></i><span class="submenu-title">节假日管理</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/webservice/backend/index/index.html"><i></i><span class="submenu-title">接口授权配置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/m_timetask/time-task.html"><i></i><span class="submenu-title">定时任务管理</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-exchange fa-fw fa"><div class="icon-bg" style="background-color:#24A568"></div></i><span class="menu-title">权限管理</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/auth-group.html"><i></i><span class="submenu-title">权限组设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/manager-user/index.html"><i></i><span class="submenu-title">管理员设置</span></a></li></ul></li>            <li class="">
        <a style="" href="javascript:void(0);"><i class="fa-gears fa-fw fa"><div class="icon-bg" style="background-color:#5BC0DE"></div></i><span class="menu-title">系统功能</span><span class="fa arrow"></span></a><ul class="nav nav-second-level collapse "><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/info.html"><i></i><span class="submenu-title">个人资料</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/change-pass.html"><i></i><span class="submenu-title">修改密码</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/authorize/index.html"><i></i><span class="submenu-title">授权设置</span></a></li><li class="">
        <a style="" href="http://www.campusapp.com.cn/backend/operate-log/index.html"><i></i><span class="submenu-title">查看日志</span></a></li></ul></li>            <li class="">
        <a style="" href="http://www.campusapp.com.cn/m_advice/default/index.html"><i class="fa-tags fa-fw fa"><div class="icon-bg" style="background-color:#E24A4E"></div></i><span class="menu-title">预约平台测试</span></a></li>                    </ul>
    </div>
</nav>
            <!-- 左侧导航栏 - end -->

            <!-- 右侧内容区 - begin -->
            <div id="page-wrapper">

                  <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left" style="line-height:47px;">
        <div class="page-title">
            失物招领        </div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right" style="">
        <ol class="breadcrumb"><li><i class="fa fa-tags"></i>&nbsp;失物招领&nbsp;&nbsp;</li></ol>    </ol>
    <div class="clearfix"></div>
</div>

    

                <div class="page-content">

<div class="row"><div class="col-sm-12"><div class="draggable-portlets"><div id="areaContainer">
    <div class="form-horizontal">
        <div class="portlet box portlet-yellow collapsed">
            <div class="portlet-header">
                <div class="caption">互动设置</div>
                <div class="tools">
                    <span class="collapse-icon portletfold">
                        收起
                    </span>
                    <span class="expand-icon portletfold">
                        设置
                    </span>
                </div>
            </div>

            <div class="portlet-body">
                <div class="alert alert_text alert-default" style="border-color:#B1DB8A;background-color:#FAF9E2;color:#555C83;">
                    <div style="display: inline-block">
                        用户来源：参与此功能的用户需要具备何种身份<br>
                                                 
                        群发消息：当前功能需要通过企业号发送消息给用户，请选择一个应用作为发送的主体
                                                                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-box" style="display:inline-block;width:100%">
                                                    <div class="form-group">
                                <label class="col-sm-2 control-label no-pr t-r">用户授权：</label>
                                <div class="col-sm-10">
                                                                                <div class="weixin">
                                            <label>
                                                <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="-1" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                                <img class="weixin-logo" src="./失物招领列表_files/ID-Correct-128.png">
                                                实名认证
                                            </label>
                                            </div>
                                                                                                                                                                    <div class="weixin">
                                            <span class="mp-type qy">企业号</span>                                                                                        <span class="mp-type pay">微信支付</span>
                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio cbr-checked"><div class="cbr-input"><input type="radio" name="wxid" checked="" value="59" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205113600.jpg">
                                           
                                            <div class="s-name">
                                               数德科技                                                                                           </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type service"> 服务号</span>                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="209" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205113601.jpg">
                                           
                                            <div class="s-name">
                                               移动校园智慧平台                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type">订阅号</span>                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="207" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205113603.jpg">
                                           
                                            <div class="s-name">
                                               天津工业大学                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type">订阅号</span>                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="206" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205113602.jpg">
                                           
                                            <div class="s-name">
                                               舞蹈演播室                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type service"> 服务号</span>                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="140" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205106624.jpg">
                                           
                                            <div class="s-name">
                                               移动校园应用                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type service"> 服务号</span>                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="136" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205106162.jpg">
                                           
                                            <div class="s-name">
                                               华硕电脑新渠道社区                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                                                                                <div class="weixin">
                                            <span class="mp-type service"> 服务号</span>                                                                                        <span class="mp-type pay">微信支付</span>
                                                                                        <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="wxid" value="26" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                             <img class="weixin-logo" src="./失物招领列表_files/205106621.jpg">
                                           
                                            <div class="s-name">
                                               掌上智慧校园                                                                                                <div class="">
                                                  <label><input type="checkbox" name="identity" value="real">实名认证</label>
                                                 </div>
                                                                                            </div> 
                                            </label>
                                            </div>
                                                                        </div>
                            </div>
                                                                         
                            <div class="form-group-separator" id="agent_separator"></div>
                            <div id="agent" class="form-group">
                                <label class="col-sm-2 control-label no-pr t-r">活动从属和群发消息：</label>
                                <div class="col-sm-10">
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="213" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">test</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="208" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(1)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">为新剧照</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="188" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(2)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">微官网</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="187" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(3)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">微官网主页型</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="186" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(4)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园互动</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="185" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(5)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">学习进度</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="184" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(6)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">党建专区</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="183" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(7)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">图书馆</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="182" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(8)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园班车</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="181" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(9)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">数据统计</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="180" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(10)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">个人中心</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="179" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(11)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园一卡通</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="178" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(12)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">群聊</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="177" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(13)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">签到</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="176" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(14)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">科研服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="175" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(15)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园通讯录</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="174" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(16)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">网络服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="173" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(17)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">迎新服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="172" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(18)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">查询服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="171" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(19)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园地图</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="169" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(20)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">企业邮箱</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="168" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(21)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">萌校应用大厅</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio cbr-checked"><div class="cbr-input"><input type="radio" name="agentid" checked="" value="165" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(22)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">失物招领</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="142" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(23)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">校园新闻</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="71" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(24)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">会议日程</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="67" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(25)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">后勤报修</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="66" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(26)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">财务服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="65" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(27)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">教务服务</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="63" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(28)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">消息中心</p>
                                            </div>
                                            </label>
                                            </div>
                                                                                    <div class="weixin">
                                            <label>
                                            <div class="cbr-replaced cbr-radio"><div class="cbr-input"><input type="radio" name="agentid" value="60" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                                            <img class="weixin-logo" src="./失物招领列表_files/0(29)">
                                            <div class="wx-label-div">
                                                <p class="wx-label-name">萌校小助手</p>
                                            </div>
                                            </label>
                                            </div>
                                                                        </div>
                            </div>
                                                                         
                        <div class="form-group btn-box">
                            <a type="submit" class="btn btn-success btn-width btn-size" onclick="activityInfoUtil.save()">保存</a>
                            <a type="reset" class="btn btn-white btn-width btn-size" onclick="Javascript:window.location.reload()">取消</a>
                        </div> 
                                                <script type="text/javascript">
                            $(':radio[name=wxid]').click(function() {
                                 
                                    var corpId = 59;
                                    if($(this).val() != corpId)
                                    {
                                       $('#agent').hide();
                                       $('#agent_separator').hide(); 
                                    }else{
                                       $('#agent').show(); 
                                       $('#agent_separator').show(); 
                                    }
                                                                     $(':checkbox[name=identity]:checked').removeAttr('checked');

                            });
                             
                            $(':radio[name=agentid]').click(function(){
                                  var agentid = $(this).val();
                                  $.ajax({
                                        type: "POST",
                                        cache: false,
                                        dataType:'json',
                                        url: '/backend/activity-classify/get.html',
                                        data: {
                                            wxid : agentid,
                                            service : 'lostfound',
                                        },
                                        success:function(resp){
                                           console.log(resp);
                                        }
                                    });  
                                   
                            });
                                                                                    var activityInfoUtil = {
                                save:function(){
                                    $.ajax({
                                        type: "POST",
                                        cache: false,
                                        dataType:'json',
                                        url: '/backend/activity-info/save.html',
                                        data: {
                                            wxid : $(':radio[name=wxid]:checked').val(),
//                                            wxid : 59,
                                            service : 'lostfound',
                                            agentid:$(':radio[name=agentid]:checked').val(),
                                            menuitems: activityInfoUtil.checkMenuOption(),
                                        },
                                        success:function(obj){
                                            var type = 2;
                                            if(obj.e == '9999')
                                            {
                                                type = 1;
                                            }
                                            alertbox(obj.m,type,1500);
                                        }
                                    });
                                },
                                checkMenuOption:function(){
                                    var obj = $('#control_share_menu :checked');
                                    if (obj.length == 0) {
                                        return '';
                                    } else if($.trim(obj.val()) === 'hideAllNonBaseMenuItem') {
                                        return 'hideAllNonBaseMenuItem';
                                    }
                                    
                                    var menuList = [];
                                    $('#show_menu_list :checked').each(function(i){
                                        menuList.push($.trim($(this).val()));
                                    });
                                    return (menuList.length == 0) ? '' : menuList;
                                }
                            }
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div></div></div><!--依次为 row,col-sm-12, draggable-portlets areaContainer-->
<style>
    .form-inline .form-group {
        margin-bottom: 10px;
        width: 100%;
    }
    .form-group .input-group-addon {
        font-size: 12px;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">                
                <div class="panel-heading">
                    <h3 class="panel-title">
                    失物招领
                    </h3>
                    <div class="panel-options">
                        <a class="btn btn-white" onclick="wapPreview(&#39;'http://www.campusapp.com.cn/w_lost/normal/index&#39;')" >
                            <i class="fa-copy"></i>
                            <span>失物招领预览</span>
                        </a>
                        <a class="btn btn-white" onclick="wapPreview(&#39;'http://www.campusapp.com.cn/w_lost/card/index&#39;') ">
                            <i class="fa-copy"></i>
                            <span>一卡通预览</span>
                        </a>
                        <a class="btn btn-secondary" href="<?php echo Url::to(['found/add'])?>">
                            <i class="fa-plus"></i>
                            <span>发　布</span>
                        </a>
                    </div>
                </div>               
                <div class="tab-pane active">
                    <form role="form" method="GET" action="http://www.campusapp.com.cn/m_lost/lost/index" class="form-inline">
                        <div class="form-group">
                            <div class="col-sm-4" style="padding-left:0px;">
                                <div class="input-group">
                                    <span class="input-group-addon">发布类型</span>
                                    <select name="type" class="form-control">
                                        <option value="">全部</option>
                                        <option value="0">招领</option>
                                        <option value="1">寻物</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">物品类型</span>
                                    <select name="tag" class="form-control">
                                        <option value="">全部</option>
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4" style="padding-left:0px;">
                                <div class="input-group">
                                    <span class="input-group-addon">状　　态</span>
                                    <select name="status" class="form-control">
                                        <option value="">全部</option>
                                        <option selected="" value="0">发布中</option>
                                        <option value="1">完成</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">物品名称</span>
                                    <input placeholder="请输入物品名称" name="title" value="" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">搜索</button>
                        </div>
                    </form>
                </div>
                <!-- 表格主体 begin -->
                <table class="table table-hover table-striped table-bordered table-advanced account_tb">
                    <thead>
                        <tr>
                            <th style="min-width:90px;">招领/寻物</th>
                            <th style="min-width:65px;">物品分类</th>
                            <th style="min-width:110px;">物品名称/卡号</th>
                            <th style="min-width:110px;">拾取/遗失时间</th>
                            <th style="min-width:97px;">拾取/遗失地点</th>
                            <th style="min-width:110px;">发布时间</th>
                            <th style="min-width:40px;">状态</th>
                            <th style="min-width:120px;" width="10%">操作</th>                                 
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="44">
                            <td>招领</td>
                            <td>一卡通</td>
                            <td>sdfsd</td>
                            <td>2017年10月09日</td>
                            <td style="word-break:break-all;">sdfsdf</td>
                            <td>2017年10月09日</td> 
                            <td>发布中</td>
                            <td>
                                <a href="http://www.campusapp.com.cn/m_lost/lost/detail?id=44" class="btn btn-info table-btn10">
                                    <span>详情</span>
                                </a>
                                <a href="javascript:;" onclick="alertfade(&#39;确定删除该记录？&#39;, &#39;del(44)&#39;);" class="btn btn-danger table-btn10">
                                    <span>删除</span>
                                </a>
                                <a href="javascript:;" onclick="finish(44,this)" class="btn btn-secondary table-btn10">
                                    <span>完成</span>
                                </a>
                            </td>                           
                        </tr> 
            <?php foreach($data as $v):?>
                <tr id="<?php echo $v['id']?>">
                            <td><?php echo $v['type']==0?'招领':'寻物' ?></td>
                            <td>一卡通</td>
                            <td><?php echo $v['title']?></td>
                            <td><?php echo date('Y-m-d',$v['pickupTime'])?></td>
                            <td style="word-break:break-all;"><?php echo $v['address']?></td>
                            <td><?php echo date('Y-m-d',$v['time']) ?></td> 
                            <td>发布中</td>
                            <td>
                                <a href="<?php echo Url::to(['found/detail','id'=>$v['id']])?>" class="btn btn-info table-btn10">
                                    <span>详情</span>
                                </a>
                                <a href="javascript:;" onclick="alertfade(&#39;确定删除该记录？&#39;, &#39;del(<?php echo $v['id']?>)&#39;);" class="btn btn-danger table-btn10">
                                    <span>删除</span>
                                </a>
                                <a href="javascript:;" onclick="finish(44,this)" class="btn btn-secondary table-btn10">
                                    <span>完成</span>
                                </a>
                            </td>                           
                        </tr>                 
            <?php endforeach;?>  
                    </tbody>
                </table>
                <!-- 表格主体 end -->           
                <!-- 分页 begin -->
                <div class="pagination_style1"><div class="row"><div class="col-lg-12 text-right"><div class="pagination-panel"><span>共19条记录</span>&nbsp;&nbsp;<ul class="pagination pagination-sm man" style="vertical-align:middle;"><li> <a>« 上一页</a></li><li class="active"><a>1</a></li><li><a href="http://www.campusapp.com.cn/m_lost/lost/index/p2.html">2</a></li><li><a href="http://www.campusapp.com.cn/m_lost/lost/index/p2.html" alt="下一页" title="下一页">下一页 »</a></li></ul><span> 到第 <input type="text" class="pagination-panel-input form-control input-mini input-inline input-sm text-center" maxpage="2" name="page" id="pageNum"> 页 </span> <button class="btn btn-sm btn-default" id="pageButton" style="padding-top:5px"> 确定</button></div></div></div><script type="text/javascript">
        $(function(){
            $("#pageButton").bind("click",function(){
                var current = "1"
                var baseUrl = "/m_lost/lost/index";
                var queryParam = "";
                var pageNum = $("#pageNum");
                var maxPageNum = pageNum.attr("maxPage");
                var toPageNum = pageNum.val();
                toPageNum = parseInt(toPageNum);
                if(isNaN(toPageNum)) return;
                maxPageNum = parseInt(maxPageNum);
                current = parseInt(current);
                if (toPageNum <= 0 || toPageNum > maxPageNum || toPageNum == current){
                    return ;
                }else{
                    window.location.href = baseUrl+"/p"+toPageNum+".html"+queryParam;
                }

            });
        });
        </script></div>
            <!-- 分页 end -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function del(id)
    {
        $.ajax({
            type:"POST",
            cache:false,
            url:'<?php echo Url::to(['found/del'])?>',
            data:{id:id,_csrf:'<?php echo \Yii::$app->request->csrfToken?>'},
            dataType:'json',
            success: function(obj){
                if ( obj == '9999')
                {
                    //alertbox("恭喜，删除成功！", 1, 2000); 
                    //window.location.reload();
                    $('#'+id).fadeOut();

                }
                else
                {
                    alertbox("糟糕，删除失败了！", 2, 2000);
                }
            }
        });
    }
    var finishLock = false;
    function finish(id,btn)
    {
        if(finishLock)return false;
        finishLock = true;
        $.ajax({
            type:"POST",
            cache:false,
            url:'/m_lost/lost/finish',
            data:{id:id},
            dataType:'json',
            success: function(obj){
                if ( obj.e == '9999')
                {
                    alertbox("操作成功！", 1, 2000);
                    location.reload();
                }
                else
                {
                    alertbox(obj.m, 2, 2000);
                    finishLock = false;
                }
            },
            error: function(){
                finishLock = false;
            }
        });
    }
</script>

                </div>

  <div id="footer">
    <div class="copyright">
        © 2016-2017 数德科技（北京）有限公司    </div>
</div>
            </div>  

    

        </div>
        <!-- 主页面 - end -->

        <!-- 快捷菜单 - begin-->
                    <!-- 快捷菜单 - begin-->
        <div class="next-enter-modal">
    <div class="modal fade in" id="preview_modal" style="display:none">
      <div class="modal-dialog" style="margin-top:30px;">
        <div class="modal-content fill-modal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">扫描二维码在移动端打开</h4>
            </div>
            <div class="modal-body">
                <div id="preview_qrcode" style="margin:auto; width:300px;height:300px;"></div>
            </div>
            <div class="modal-footer" style="text-align:center;">
                <a class="btn btn-info toCopy" style="width:120px;" data-clipboard-target="toCopyField">复制链接</a>
                <a class="btn btn-info" style="width:120px;" target="_blank" href="http://www.campusapp.com.cn/m_lost/lost/index" id="preview_newwindow">新窗口打开</a>
                <a class="btn btn-turquoise" data-dismiss="modal" style="width:120px;" href="http://www.campusapp.com.cn/m_lost/lost/index">关闭</a>
                <input type="hidden" id="toCopyField" value="">
            </div>
        </div>
      </div>
    </div>
</div>
        <!-- 加载的公共js -->
          <!--loading bootstrap js-->
<script src="./失物招领列表_files/bootstrap-hover-dropdown.js.下载"></script>
<script src="./失物招领列表_files/html5shiv.js.下载"></script>
<script src="./失物招领列表_files/respond.min.js.下载"></script>
<script src="./失物招领列表_files/jquery.metisMenu.js.下载"></script>
<script src="./失物招领列表_files/jquery.slimscroll.js.下载"></script>
<script src="./失物招领列表_files/jquery.cookie.js.下载"></script>
<script src="./失物招领列表_files/jquery.menu.js.下载"></script>
<script src="./失物招领列表_files/pace.min.js.下载"></script>
<script src="./失物招领列表_files/holder.js.下载"></script>
<script src="./失物招领列表_files/responsive-tabs.js.下载"></script>

<script src="./失物招领列表_files/intro.js.下载"></script>
<!--script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.categories.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.pie.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.tooltip.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.resize.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.fillbetween.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.stack.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/flot-chart/jquery.flot.spline.js"></script>
<script src="http://www.campusapp.com.cn/madmin/style1/vendors/calendar/zabuto_calendar.min.js"></script-->
<script src="./失物招领列表_files/index.js.下载"></script>

<script type="text/javascript" src="./失物招领列表_files/keywords.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/face.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/jquery.selectBoxIt.min.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/alert-fade.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/alert-box.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/jquery.lazyload.js.下载"></script>
<script src="./失物招领列表_files/main.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/xenon-custom.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/vue.min.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/confirm-box.js.下载"></script>
<script type="text/javascript" src="./失物招领列表_files/ZeroClipboard.js.下载"></script>
<script type="text/javascript">
var wapPreview = function(url)
{
    var baseUrl = "http://www.campusapp.com.cn/api/qrcode/index.html";
    baseUrl = baseUrl.replace(/\?[\S\s]*$/,'');
    $("#preview_qrcode").html("<img style='margin-left:auto;margin-right:auto;' src=\""+baseUrl+"?text=" + encodeURIComponent(url) + "\" width='300' height='300'>");
    $("#toCopyField").val(url);
    $("#preview_newwindow").attr('href', url);
    $("#preview_modal").modal('show', {backdrop: 'static'});
    var obj = $(".toCopy");
    var clip = new ZeroClipboard(obj, {});
    obj.mouseover(function(){
        clip.on('complete', function(client, args) {
           alertbox("预览地址已复制到剪贴板！", 1, 1500);
        });
    });
}
</script>

            

<div id="_my97DP" style="position: absolute; top: -1970px; left: -1970px;"><iframe style="width: 186px; height: 198px;" src="./失物招领列表_files/My97DatePicker.html" frameborder="0" border="0" scrolling="no"></iframe></div></body></html>