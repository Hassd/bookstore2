<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填加类别</title>
<link href="/ttt/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function lbyz(fom){
	if(fom.mc.value==''){
		alert('请输入类别名称');
		fom.mc.select();
		return false;
		}
	if(fom.ms.value==''){
		alert('请输入类别描述');
		fom.ms.select();
		return false;
		}
	}
</script>
<body>
<div id="header">
    <h1><img src="/ttt/Public/Admin/images/logo.gif" />天天书屋后台管理系统</h1>
</div>
<div id="left">
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />商品管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/book/BookAddShow">填加商品</a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/book/BookShow">编辑商品</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />类别管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif"  border="0px"/><a href="/ttt/admin.php/type/typeshow">编辑类别</a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/type/typeaddshow">填加类别</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />会员管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/user/usershow">会员管理</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />订单管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/Dingdan/DingdanShow">编辑订单</a></li>
  </ul>
  <h3><img src="/ttt/Public/Admin/images/houtai1_03.gif" />公告管理<img src="/ttt/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/gonggao/gonggaoshow">编辑公告</a></li>
    <li><img src="/ttt/Public/Admin/images/houtai_03.gif" /><a href="/ttt/admin.php/gonggao/GonggaoAddShow">添加公告</a></li>
  </ul>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加类别</p>
  <form action="/ttt/admin.php/Type/TypeSave/typeid/<?php echo ($list["typeid"]); ?>" method="post" onsubmit="return lbyz(this)" >
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>类别名称:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><input type="text" name="typename" value="<?php echo ($list["typename"]); ?>" /></td>
            </tr> 
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>类别描述:</div></td>
              <td width="560"  bgcolor="#FFFFFF">
                <textarea name="typedes" cols="" rows="" style=" margin-left:10px; width:350px; height:200px;"><?php echo ($list["typedes"]); ?></textarea>
              </td>
            </tr>
             <tr>
              <td colspan="4"  bgcolor="#FFFFFF">
                <input type="submit" name="ok" value="提&nbsp;交" style="width:55px; height:30px;"/>
                <input type="reset"  value="重&nbsp;置" style="width:55px; height:30px;"/>
              </td>
            </tr>         
          </table></td>
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