<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改公告</title>
<link href="/ttt/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
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
  <script language="javascript">
  function chkinput(form)
   {
     if(form.title.value=="")
	 {
	   alert("请输入公告主题!");
	   form.title.select();
	   return(false);
	 }
     if(form.content.value=="")
	 {
	   alert("请输入公告内容!");
	   form.content.select();
	   return(false);
	 }
	 return(true);
   }
</script>
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：公告管理－＞修改公告</p>
  <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="175" bgcolor="#666666"><table width="670" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
          <form action="/ttt/admin.php/Gonggao/GonggaoSave/id/<?php echo ($list["id"]); ?>" name="form1" method="post"  onsubmit="return chkinput(this)">
            <tr>
              <td width="82" height="25" bgcolor="#FFFFFF">公告主题：</td>
              <td width="585" bgcolor="#FFFFFF"><div  style="text-align:left;">
                  <input type="text" name="title" size="50" value="<?php echo ($list["title"]); ?>" class="inputcss"> 
              </div></td>
            </tr>
            <tr>
              <td height="125" bgcolor="#FFFFFF">公告内容：</td>
              <td height="125" bgcolor="#FFFFFF"><div style="text-align:left;">
                  <textarea name="content" rows="8" cols="70" style="margin-left:10px;"><?php echo ($list["content"]); ?></textarea>
                </div></td>
            </tr>
            <tr>
              <td height="25" colspan="2" bgcolor="#FFFFFF">
                  <input type="submit" name="submit" value="修改" class="buttoncss" style="width:55px; height:30px;">
                  &nbsp;&nbsp;
                  <input type="reset" value="重写" class="buttoncss "  style="width:55px; height:30px;">
             </td>
            </tr>
          </form>
        </table></td>
    </tr>
  </table>
</div>
<div id="footer">
  <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>