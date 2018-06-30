<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="/ttt/Public/Home/css/gonggao.css" />
</head>
<body>
<div id="header">
    <div id="login">
     <p><span class="p1">欢迎来天天书屋!
     <a href="/ttt/index.php/Home/login/loginshow"><img src="/ttt/Public/Home/images/login1.gif" />请登录</a> 
     <a href="/ttt/index.php/Home/regsiter/regsitershow"><img src="/ttt/Public/Home/images/login1.gif" />免费注册</a>
	 </span><span class="p2"> <a href="gouwuche.html"><img  src="/ttt/Public/Home/images/login2.gif" />购物车</a> <a href="dingdan.html"><img  src="/ttt/Public/Home/images/login2.gif" />我的订单</a></span></a> </p>
  </div>
  <div id="logo">
    <h1><img src="/ttt/Public/Home/images/logo.gif" />各种好看的图书尽在天天书屋</h1>
	
  </div>
  <form action="" method="get" style="background-color:#0C6; width:300px; height:30px; margin:20px 30px 0px 0px; padding-top:10px; float:right; padding-left:10px;">
    热门搜索：
    <input name="" type="text" value="输入关键字" />
    <input name="搜索" type="button" id="搜索" value="搜索" />
  </form>
</div>
<div id="nav" >
    <ul>
    <li><a href="/ttt/index.php/Home/index/index">首页</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">新书预售</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">推荐图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">科技图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">教育图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">文艺图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">青春图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">励志图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">生活图书</a></li>
    <li><a href="/ttt/index.php/Home/yuding/yuding">管理图书</a></li>
  </ul>
</div>
<div id="content">
<h1 style="width:100%; margin:10px 0; text-align:center;"><?php echo ($list["title"]); ?></h1>
<p><?php echo ($list["content"]); ?></p>
</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
  <p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>
</body>
</html>