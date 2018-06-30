<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>图片商城首页</title>
<link rel="stylesheet" type="text/css" href="/ttt/Public/Home/css/regsiter.css" />
</head>
<body>
<script language="javascript">
function zczy(fom){
     var qrmm=fom.qrmm.value;
	var dlmm=fom.dlmm.value;
	var yxdz=fom.xydz.value;
	var dlmmyz=/^[0-9a-zA-Z][0-9a-zA-Z]{0,16}$/;
	var yxdzyz=/^(?:\w+\.?)*\w+@(?:\w+\.)+\w+$/;
	if(fom.yhm.value==''){
		alert('请输入用户名');
		fom.yhm.select();
		return false;
		}
	if(fom.dlmm.value==''){
		alert('请输入登录密码');
		fom.dlmm.select();
		return false;
		}
	if(!dlmmyz.test(dlmm)){
		alert('请输入0-9或a-z或A-Z并且长度为16');
		fom.dlmm.select();
		return false;
				   }
	if(fom.qrmm.value==''){
		alert('请输入确认密码');
		fom.qrmm.select();
		return false;
		}
	if(qrmm!=dlmm){
		alert('密码不一致');
		return false;
		}
	
	if(fom.lxdh.value==''){
		alert('请输入联系电话');
		fom.lxdh.select();
		return false;
		}
	if(fom.xydz.value==''){
		alert('请输入邮箱地址');
		fom.xydz.select();
		return false;
		}
	if(!yxdzyz.test(yxdz)){
		alert('请输入有效的邮箱地址');
		fom.xydz.select();
		return false;
		}
	if(fom.yhdz.value==''){
		alert('请输入用户地址');
		fom.yhdz.select();
		return false;
		}
	if(fom.yzm.value==''){
		alert('请输入验证码');
		fom.yzm.select();
		return false;
		}
	
	}
</script>


<div id="header">
  <div id="login">
       <p><span class="p1">欢迎来天天书屋！
       <a href="login.html"><img  src="/ttt/Public/Home/images/login1.gif" />请登录</a> 
       <a href="/ttt/index.php/regsiter/regsiter"><img  src="/ttt/Public/Home/images/login1.gif" />免费注册</a>
       </span><span class="p2"> <a href="gouwuche.html"><img  src="/ttt/Public/Home/images/login2.gif" />购物车</a> 
       <a href="dingdan.html"><img  src="/ttt/Public/Home/images/login2.gif" />我的订单</a></span></a> </p>
  </div>
  <div id="logo">
    <h1><img src="/ttt/Public/Home/images/logo.gif" />各种好看的图书尽在天天书屋</h1>
  </div>
  <form action="" method="get" style="background-color:#0C6; width:300px; height:30px; margin:20px 30px 0px 0px; padding-top:10px; float:right; padding-left:10px;">
    <select name="全部分类" size="1" >
      <option value="全部分类">全部分类</option>
      <option value="全部分类">全部分类2</option>
    </select>
    <input name="" type="text" value="输入关键字" />
    <input name="搜索" type="button" id="搜索" value="搜索" />
  </form>
</div>
<div id="nav" >
  <ul>
    <li><a href="index.html">首页</a></li>
    <li><a href="yuding.html">新书预售</a></li>
    <li><a href="tushuchangxiao.html">图书畅榜</a></li>
    <li><a href="yuding.html">推荐图书</a></li>
    <li><a href="yuding.html">科技图书</a></li>
    <li><a href="yuding.html">教育图书</a></li>
    <li><a href="yuding.html">文艺图书</a></li>
    <li><a href="yuding.html">青春图书</a></li>
    <li><a href="yuding.html">励志图书</a></li>
    <li><a href="yuding.html">生活图书</a></li>
    <li><a href="yuding.html">管理图书</a></li>
  </ul>
</div>
<div id="content">
 
<form id="zhuce" action="addregsiter.php" method="post" style="background:url(/ttt/Public/Home/images/bg.gif) no-repeat;" onsubmit="return zczy(this)">
     <h1>天天注册</h1>
      <ul>
        <li><a href="#">1.填写注册信息</a></li>
        <li><a href="#">2.注册成功</a></li>
         
  </ul>
 <p style="font-size:12px; text-align:right; margin-right:100px;">以下<font style=" color:#F00;">*</font>为必填项</p>
    
    <table width="571" border="0" id="table2" >
      <tr>
        <td width="80" height="49"><font color="#FF0000">*</font>用 户 名：</td>
        <td width="166"><input name="yhm" type="text"  /></td>
        <td width="321" style="color:#8ec657; text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />请填写您常用的Emai地址或手机号码 方便您记忆</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>登录密码：</td>
        <td><input name="dlmm" type="password" /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />6-20位英文字母或者数字建议采用易记的英文数字组合</font></td>
      </tr>
      <tr>
        <td height="61"><font color="#FF0000">*</font>确认密码：</td>
        <td><input name="qrmm" type="password"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />必需与设置密码一致</font></td>
      </tr>
      
     <tr>
        <td height="49">联系电话：</td>
        <td><input name="lxdh" type="text" /></td>
        <td  style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />请正确填写</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>邮箱地址：</td>
        <td><input name="xydz" type="text"  /></td>
        <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />请务必真实，并确认是您最常用的电子邮箱</font></td>
      </tr>
      <tr>
      <td height="49">用户地址:</td>
      <td><input type="text" name="yhdz" /></td>
      <td style=" text-align:left; padding-left:5px;"><font color="#0000FF";><img src="/ttt/Public/Home/images/logintb.jpg" style="padding-right:5px;" />填写城市名、区、街道、门牌号。</font></td>
      </tr>
      <tr>
        <td height="49"><font color="#FF0000">*</font>验 证 码：</td>
        <td><input name="yzm" type="text" /></td>
        <td style="text-align:left;"><img src="<?php echo U("regsiter/Verify");?>" /></td>
      </tr>
      <tr>
        <td height="55" width="80"></td>
        <td> 
          <input type="submit" name="ok" id="ok" value="" style="background:url(/ttt/Public/Home/images/bottom.gif); width:114px; height:51px; border:0px;" />
         </td>
         <td></td>
      </tr>
    </table>
    </form>

</div>
<div id="footer">
  <p>互联网信息服务备案编号：冀ICP备06003045号 技术支持：现代教育技术部 </p>
<p>Copyright @2012-2014,All Rights Reserved  京ICP证041189号</p>
</div></body>
</html>