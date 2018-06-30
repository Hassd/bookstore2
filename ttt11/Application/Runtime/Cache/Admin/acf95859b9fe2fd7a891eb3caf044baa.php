<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看订单</title>
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：订单管理－＞查看订单</p>
  <form name="form1" method="post" action="/ttt11/admin.php/Dingdan/DingdanDelAll">
  <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
    <td height="40" bgcolor="#666666"><table width="670" height="44" border="0" align="center" cellpadding="0" cellspacing="1">
      
	  <tr>
      <td width="70" bgcolor="#FFFFFF">操作</td>
      <td width="121" height="20" bgcolor="#FFFFFF">订单号</td>
      <td width="59" bgcolor="#FFFFFF"><div>下单人</div></td>
      <td width="60" bgcolor="#FFFFFF"><div>订货人</div></td>
      <td width="70" bgcolor="#FFFFFF"><div>金额总计</div></td>
      <td width="87" bgcolor="#FFFFFF"><div>收货方式</div></td>
      <td width="141" bgcolor="#FFFFFF"><div>订单状态</div></td>
      <td width="115" bgcolor="#FFFFFF"><div>操作</div></td>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dingdan): $mod = ($i % 2 );++$i;?><tr>
        <td height="21" bgcolor="#FFFFFF"><input type="checkbox" name="<?php echo ($dingdan["orderid"]); ?>" value="1"></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["orderid"]); ?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["xiadanren"]); ?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["shouhuoren"]); ?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["total"]); ?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["shff"]); ?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div><?php echo ($dingdan["zt"]); ?></div></td>
     
		    <td height="25" bgcolor="#FFFFFF">
          <div>
            <a href="/ttt11/admin.php/Dingdan/DingdanSaveShow/orderid/<?php echo ($dingdan["orderid"]); ?>">查看</a>&nbsp;&nbsp;
            <a href="/ttt11/admin.php/Dingdan/DingdanDel/orderid/<?php echo ($dingdan["orderid"]); ?>">删除</a>
          </div>
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table></td>
  </tr>
</table>
<table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr style="text-align:right; margin-right:5px;">
<td  style="text-align:right; padding-right:10px;"> 
<input type="submit" value="删除选择项" class="buttoncss" style="margin-right:255px;" ></td>
    <td style="text-align:right; padding-right:10px;" > 
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