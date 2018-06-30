<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" type="text/css" href="/ttt11/Public/Home/css/login.css"/>
</head>

<body>

<div id="logo" style="height:350px">
<h1><img src="/ttt11/Public/Home/images/denglu1_03.gif" />快来加入天天书屋吧！</h1>
<h1 id="h"> 各种图书等你来看个够。</h1>
<p style="text-align:right; color: #0C0;"><a href="/ttt11/index.php/Home/index/index" style="color:#0C3">返回首页</a>&nbsp;<a href="/ttt11/index.php/Home/regsiter/regsitershow" style="color:#0C3">注册</a></p>
<form action="/ttt11/index.php/Home/login/login" method="post"> 
  <p>用户名：
    <input name="username" type="text" id="yhm" />
  </p>
  <p>
    密码：&nbsp;
      <input name="password" type="password" id="mm" />
  </p>
  <p>
    验证码：
      <input name="yzm" type="text" style="width:60px;"/><img src="<?php echo U('Login/verify');?>" width="120" height="40"/>
  </p>
  <input name="ok"  type="submit" style="background:url(/ttt11/Public/Home/images/denglu2.gif); width:99px ; height:36px;  margin-left:30px;" value="登录" id="ok" />
  <input name=""  type="reset" style="background:url(/ttt11/Public/Home/images/denglu3.gif)  ; width:97px ; height:36px; margin-left:30px; " value="重置" />
</form>
</div>

</body>
</html>