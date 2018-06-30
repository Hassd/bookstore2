<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看类别</title>
<link href="/ttt/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="header">
  <h1><img src="/ttt/Public/Admin/images/logo.gif" />天天书屋后台管理系统</h1>
</div>
<div id="left">
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />商品管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="shopym.html">填加商品</a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="lookshopym.html">编辑商品</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />类别管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif"  border="0px"/><a href="lookleibieym.html">编辑类别</a><a href="lookleibieym.php"></a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="leibieym.html">填加类别</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />会员管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="user.html">会员管理</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />订单管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="dingdan.html">编辑订单</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />公告管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="gonggao.html">编辑公告</a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="addgonggao.html">添加公告</a></li>
  </ul>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：类别管理－＞查看类别</p>
  <form action="#" method="post" >
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
          <tr>
            <td width="102"  bgcolor="#FFFFFF"><div>复选</div></td>
            <td width="201"  bgcolor="#FFFFFF"><div>类别名称</div></td>
            <td width="232"  bgcolor="#FFFFFF"><div>类别描述</div></td>
            <td width="122"  bgcolor="#FFFFFF"><div>操作</div></td>
          </tr>
          
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><tr>
              <td width="102"  bgcolor="#FFFFFF"><div><input type="checkbox"  name="" value=""/></div></td>
              <td width="201"  bgcolor="#FFFFFF"><div><?php echo ($type["typename"]); ?> </div></td>
              <td width="232"  bgcolor="#FFFFFF"><div><?php echo ($type["typedes"]); ?></div></td>
              <td width="122"  bgcolor="#FFFFFF"><div><a href="xgleibieym.php">修改</a>&nbsp;<a href="deleleibieym.php">删除</a></div></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

          </table></td>
      </tr>
       
</table>
   <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td  style="text-align:right; padding-right:10px;"> 
	<input type="submit" value="删除选择项" class="buttoncss" style="margin-right:255px;" >
	  
      
		 </td>   <td  style="text-align:right; padding-right:10px;"> 
本站共有 1 条记录 每页显示 7 条 第 1 页/共 1 页
	  
      
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