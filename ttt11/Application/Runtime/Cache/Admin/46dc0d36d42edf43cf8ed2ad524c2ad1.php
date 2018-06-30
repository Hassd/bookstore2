<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看会员</title>
<link href="/ttt11/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
    <h1><img src="/ttt11/Public/Admin/images/logo.gif" />天天书屋后台管理系统</h1>
</div>
<div id="left">
  <h3><img src="/ttt11/Public/Admin/images/houtai1_03.gif" />商品管理<img src="/ttt11/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/book/BookAddShow">填加商品</a></li>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/book/BookShow">编辑商品</a></li>
  </ul>
  <h3><img src="/ttt11/Public/Admin/images/houtai1_03.gif" />类别管理<img src="/ttt11/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif"  border="0px"/><a href="/ttt11/admin.php/type/typeshow">编辑类别</a></li>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/type/typeaddshow">填加类别</a></li>
  </ul>
  <h3><img src="/ttt11/Public/Admin/images/houtai1_03.gif" />会员管理<img src="/ttt11/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/user/usershow">会员管理</a></li>
  </ul>
  <h3><img src="/ttt11/Public/Admin/images/houtai1_03.gif" />订单管理<img src="/ttt11/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/Dingdan/DingdanShow">编辑订单</a></li>
  </ul>
  <h3><img src="/ttt11/Public/Admin/images/houtai1_03.gif" />公告管理<img src="/ttt11/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/gonggao/gonggaoshow">编辑公告</a></li>
    <li><img src="/ttt11/Public/Admin/images/houtai_03.gif" /><a href="/ttt11/admin.php/gonggao/GonggaoAddShow">添加公告</a></li>
  </ul>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：会员管理－＞查看会员</p>
  
<form action="/ttt11/admin.php/User/userDelAll" method="post">
<table width="670" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:right;">
 
  <tr>
    <td height="50" bgcolor="#666666">
      <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
    
        <tr>
          <td width="50" height="25" bgcolor="#FFFFFF"><div align="center">复选</div></td>
          <td width="100" bgcolor="#FFFFFF"><div align="center">用户姓名</div></td>
          <td width="100" bgcolor="#FFFFFF"><div align="center">用户密码</div></td> 
          <td width="150" bgcolor="#FFFFFF"><div align="center">用户电话</div></td>
          <td width="100" bgcolor="#FFFFFF"><div align="center">用户地址</div></td>
          <td width="100" bgcolor="#FFFFFF"><div align="center">用户邮箱</div></td>
          <td width="100" bgcolor="#FFFFFF"><div align="center">注册时间</div></td>
          <td width="248" bgcolor="#FFFFFF"><div align="center">操作</div></td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center"><input type="checkbox" name="<?php echo ($user["userid"]); ?>" value="1">
            </div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["username"]); ?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["password"]); ?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["tel"]); ?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["adress"]); ?></div></td> 
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["email"]); ?></div></td> 
              <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo ($user["redtime"]); ?></div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="/ttt11/admin.php/User/UserDel/userid/<?php echo ($user["userid"]); ?>">删除</a></div></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
    </td>
  </tr>
</table>
<table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td  style="text-align:right; padding-right:10px;"> 
	<input type="submit" value="删除选择项" class="buttoncss" style="margin-right:255px;" >
	  
      
		 </td>   <td  style="text-align:right; padding-right:10px;"> 
      <?php echo ($page); ?>
		 </td>
  </tr>
</table>
</form>
  
  
  
  </div>
  <div id="footer">
 <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>