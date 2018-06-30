<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车</title>
<link rel="stylesheet" type="text/css" href="/ttt11/Public/Home/css/dingdan.css" />
</head>
    <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert("请输入收货人姓名!");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert("请输入收货人地址!");
				  form.dz.select();
				  return(false);
				}
				if(form.yb.value==""){
				  alert("请输入收货人邮编!");
				  form.yb.select();
				  return(false);
				}
				if(form.tel.value==""){
				  alert("请输入收货人联系电话!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert("请输入收货人E-mail地址!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("收货人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
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
<img src="images/dingd.jpg"  />

<div id="content">
  <div id="dingdan">
    <h3 style="color:#FFF; font-size:15px;">请添写收货人信息</h3>

    <form action="/ttt11/index.php/Home/Dingdan/dingdanadd" method="post" name="form1">
      <table width="261" border="0" bordercolor="#FF9900" id="tianxie" cellspacing="0" cellpadding="0" >
        <tr>
          <td width="88" height="35"><p>收货人姓名：</p></td>
          <td width="166"><input  name="shouhuoren" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td width="88" height="35"><p>收货人性别： </p></td>
          <td width="166"><input type="radio" name="sex" value="女"  checked="checked"/>女<input type="radio" name="sex" value="男" />男</td>
        </tr>
                <tr>
          <td height="34">收货人地址：</td>
          <td><input name="address" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">  </td>
        </tr>
        <tr>
          <td height="34"><p>邮 编：</p></td>
          <td><input name="youbian" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>联系电话：</p></td>
          <td><input name="tel" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> 邮箱地址：</p></td>
          <td><input name="email" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p> 下单人姓名：</p></td>
          <td><input name="xiadanren" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
        </tr>
        <tr>
          <td height="34"><p>送货方式:</p></td>
          <td>
          	<select name="shff">
            <option selected="selected">普通快递</option>
            <option>平邮</option>
            <option>特快专递</option>
            <option>圆通</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2"> <div align="center">
            <input name="ok" type="submit" class="buttoncss" value="提交订单">      
            <input name="input" type="reset" value="重置订单" />
          </div></td>
        </tr>
      </table>
    </form>
     </div>
</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06001111号 技术支持：计算机系</p>
<p>Copyright @2012-2019,All Rights Reserved  京ICP证041189号</p>
</div>

</body>
</html>