<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看详细订单</title>
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：订单管理－＞查看详细订单</p>
  <table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
    <form action="/ttt11/admin.php/Dingdan/DingdanSave/orderid/<?php echo ($list["orderid"]); ?>" method="post">
      <tr>
        <td width="156" height="20">订单号：<?php echo ($list["orderid"]); ?></td>
        <td width="320" height="20">
        	<?php switch($list["zt"]): case "已收款": ?><input name="zt" checked="checked" type="radio" value="已收款" />已收款
          		<input name="zt" type="radio" value="已发货" />已发货
          		<input name="zt" type="radio" value="已收货" />已收货<?php break;?>
                <?php case "已发货": ?><input name="zt" type="radio" value="已收款" />已收款
                    <input name="zt" checked="checked" type="radio" value="已发货" />已发货
                    <input name="zt" type="radio" value="已收货" />已收货<?php break;?>
                <?php case "已收货": ?><input name="zt" type="radio" value="已收款" />已收款
                    <input name="zt" type="radio" value="已发货" />已发货
                    <input name="zt" checked="checked" type="radio" value="已收货" />已收货<?php break; endswitch;?>
        <td width="124"><input name="ok"  value="修改" type="submit" style="width:55px; height:20px;" /></td>
      </tr>
    </form>
    <tr>
      <td width="156" height="20">商品列表(如下)：</td>
    </tr>
  </table>
  <table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td bgcolor="#666666">
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr bgcolor="#628e37" style="color:#FFF">
            <td width="153" height="20">商品名称</td>
            <td width="80">市场价</td>
            <td width="80">折扣</td>
            <td width="80">数量</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="20"><?php echo ($list["spc"]); ?></td>
            <td height="20"><?php echo ($list["total"]); ?></td>
            <td height="20">0</td>
            <td height="20"><?php echo ($list["slc"]); ?></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="20" colspan="4"> 总计费用:<?php echo ($list["total"]); ?> </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="82" height="20">下单人：</td>
      <td colspan="3"><?php echo ($list["xiadanren"]); ?></td>
    </tr>
    <tr>
      <td height="20">收货人：</td>
      <td height="20" colspan="3"><?php echo ($list["shouhuoren"]); ?></td>
    </tr>
    <tr>
      <td height="20">收货人地址：</td>
      <td height="20" colspan="3"><?php echo ($list["address"]); ?></td>
    </tr>
    <tr>
      <td height="20">邮&nbsp;&nbsp;编：</td>
      <td width="136" height="20"><?php echo ($list["youbian"]); ?></td>
      <td width="79">电&nbsp;&nbsp;话：</td>
      <td width="163"><?php echo ($list["tel"]); ?></td>
    </tr>
    <tr>
      <td height="20">E-mail:</td>
      <td height="20"><?php echo ($list["email"]); ?></td>
      <td height="20">送货方式：</td>
      <td height="20"><?php echo ($list["shff"]); ?></td>
    </tr>
  </table>
</div>
<div id="footer">
  <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>