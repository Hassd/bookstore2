<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="/ttt11/Public/Home/css/index.css" />
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
<div id="content">
  <div id="left">
    <div id="subnav">
      <h3><img src="/ttt11/Public/Home/images/left.gif" />图书分类</h3>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/1">科技类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/2">教育类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/3">文艺类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/4">青春类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/5">励志类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/6">生活类</a></h4>
<h4><img src="/ttt11/Public/Home/images/login2.gif" /><a href="/ttt11/index.php/Home/yuding/yuding/type/3/typeid/7">管理类</a></h4>
    </div>
    <div id="bottom">
      <h3><img src="/ttt11/Public/Home/images/left.gif" />天天公告</h3>
<ul>
<?php if(is_array($listgao)): $i = 0; $__LIST__ = $listgao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gonggao): $mod = ($i % 2 );++$i;?><li><a href="/ttt11/index.php/Home/gonggao/gonggao/id/<?php echo ($gonggao["id"]); ?>"><?php echo ($gonggao["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
    </div>
  </div>
  <div id="con">
    <div id="banner">
      <script language="javascript" src="/ttt11/Public/Home/js/pptBox.js"></script>
      <script>
     var box =new PPTBox();
     box.width = 510; //宽度
     box.height = 314;//高度
     box.autoplayer = 3;//自动播放间隔时间

     //box.add({"url":"图片地址","title":"悬浮标题","href":"链接地址"})
     box.add({"url":"/ttt11/Public/Home/images/js4.png","href":"","title":"悬浮提示标题1"})//url为换图片 href为点击后链接的地址
     box.add({"url":"/ttt11/Public/Home/images/js2.png","href":"","title":"悬浮提示标题2"})//url为换图片 href为点击后链接的地址
     box.add({"url":"/ttt11/Public/Home/images/js3.png","href":"","title":"悬浮提示标题3"})//url为换图片 href为点击后链接的地址
     box.add({"url":"/ttt11/Public/Home/images/js.png","href":"","title":"悬浮提示标题4"})//url为换图片 href为点击后链接的地址
     box.show();
    </script>
    </div>
    <div id="right">
      <h3><img src="/ttt11/Public/Home/images/right.gif" /><span>图书畅销榜</span></h3>

      <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$book2): $mod = ($i % 2 );++$i;?><p><a href="/ttt11/index.php/Home/xiangxi/xiangxi/id/<?php echo ($book2["bookid"]); ?>"><img src="/ttt11/Public/Home/images/<?php echo ($i); ?>.gif" /><?php echo ($book2["bookname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <div id="confooter">
      <h3><span class="hl"><img id="conimg" src="/ttt11/Public/Home/images/right5.gif" />推荐图书</span><span class="hr">更多推荐图书>></span></h3>
      <ul>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$book): $mod = ($i % 2 );++$i;?><li><a href="/ttt11/index.php/Home/xiangxi/xiangxi/id/<?php echo ($book["bookid"]); ?>"> <img src="/ttt11/Uploads/<?php echo ($book["photo"]); ?>"  height="50px" /></a>
              <h5><span>图书名称：</span><a href="/ttt11/index.php/Home/xiangxi/xiangxi/id/<?php echo ($book["bookid"]); ?>"><?php echo ($book["bookname"]); ?></a></h5>
              <p><?php echo ($book["author"]); ?></p>
              <p>价格<span><?php echo ($book["bookprice"]); ?></span></p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</div>
<div id="footer"> 
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
  <p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>
</body>
</html>