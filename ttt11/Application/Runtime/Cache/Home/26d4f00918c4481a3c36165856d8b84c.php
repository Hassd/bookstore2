<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="/ttt11/Public/Home/css/dingdan.css" />
</head>
<body>
<div id="header">
    <div id="login">
	<?php if(empty($_SESSION['userid'])): ?><p>
             <span class="p1">欢迎来天天书屋!
                 <a href="/ttt11/index.php/Home/login/loginshow"><img src="/ttt11/Public/Home/images/login1.gif" />请登录</a> 
                 <a href="/ttt11/index.php/Home/regsiter/regsitershow"><img src="/ttt11/Public/Home/images/login1.gif" />免费注册</a>
             </span>
             <span class="p2"> 
                 <a href="/ttt11/index.php/Home/gouwuche/gouwucheshow"><img src="/ttt11/Public/Home/images/login2.gif" />购物车</a> 
                 <a href="/ttt11/index.php/Home/dingdan/dingdanshow"><img src="/ttt11/Public/Home/images/login2.gif" />我的订单</a>
             </span>
         </p>
	<?php else: ?>
         <p>
             <span class="p1"><?php echo (session('username')); ?>欢迎来天天书屋!</span>
             <span class="p2"> 
                 <a href="/ttt11/index.php/Home/gouwuche/gouwucheshow"><img  src="/ttt11/Public/Home/images/login2.gif" />购物车</a> 
                 <a href="/ttt11/index.php/Home/dingdan/dingdanshow"><img  src="/ttt11/Public/Home/images/login2.gif" />我的订单</a>
             </span>
         </p><?php endif; ?>
  </div>
  <div id="logo">
    <h1><img src="/ttt11/Public/Home/images/logo.gif" />各种好看的图书尽在天天书屋</h1>
	
  </div>
  <form action="/ttt11/index.php/Home/yuding/soushuo" method="POST" style="background-color:#0C6; width:300px; height:30px; margin:20px 30px 0px 0px; padding-top:10px; float:right; padding-left:10px;">
   <select name="ghg">
        <option value="1" selected="selected">书名</option>
        <option value="2" >作者名</option>
    </select>
    <input name="text" type="text"  placeholder="输入关键字" />
    <input type="submit" id="搜索" value="搜索" />
  </form>
</div>
<div id="nav" >
    <ul>
    <li><a href="/ttt11/index.php/Home/index/index">首页</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/1">新书预售</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/2">推荐图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/1">科技图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/2">教育图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/3">文艺图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/4">青春图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/5">励志图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/6">生活图书</a></li>
    <li><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/7">管理图书</a></li>
  </ul>
</div>
<script language="javascript"> 
        function resizeImage(obj){if(obj.height>50)obj.height=50;if(obj.width>50)obj.width=50; } 
        </script>
<div id="content" style="margin:10px 0;"> 
    <table width="1000" border="1" bordercolor="#006600" bgcolor="#FFFFFF"  cellspacing="0">
      <tr >
        <th width="100">名称</th>
        <th width="50">数量</th>
        <th width="50">总价</th>
        <th width="100">地址</th>
        <th width="50">下单人</th>
        <th width="50">收货人</th>
        <th width="50">邮编</th>
        <th width="100">手机</th>
        <th width="100">邮件</th>
        <th width="50">快递</th>
        <th width="100">时间</th>
        <th width="50">状态</th>
        <th width="50">操作</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dingdan): $mod = ($i % 2 );++$i;?><tr>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["spc"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["slc"]); ?></td>
          <td style="border-top:1px #F60 solid;">￥<?php echo ($dingdan["total"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["address"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["xiadanren"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["shouhuoren"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["youbian"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["tel"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["email"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["shff"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["orderdate"]); ?></td>
          <td style="border-top:1px #F60 solid;"><?php echo ($dingdan["zt"]); ?></td>
          <td style="border-top:1px #F60 solid; border-right:0px">
          	<a href="/ttt11/index.php/Home/Dingdan/dingdanDel/id/<?php echo ($dingdan["orderid"]); ?>">删除</a>
          </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
	<div id="ft">
    	&nbsp;&nbsp;&nbsp;&nbsp;<a href="/ttt11/index.php/Home/Dingdan/dingdanalldel">清空订单</a> 
    </div>
</div>
</body>
</html>