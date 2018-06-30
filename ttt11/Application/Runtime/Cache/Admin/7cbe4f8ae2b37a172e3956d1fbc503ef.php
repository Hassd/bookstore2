<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填加商品</title>
<link href="/ttt11/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function sjyz(fom){
	if(fom.name.value==''){
		alert("请输入图书名称");
		fom.name.select();
		return false;
		}
	if(fom.sh.value==''){
		alert("请输入书号");
		fom.sh.select();
		return false;
		}
	if(fom.zz.value==''){
		alert("请输入作者");
		fom.zz.select();
		return false;
		}
	if(fom.cbs.value==''){
		alert("请输入出版社");
		fom.cbs.select();
		return false;
		}
	if(fom.jg.value==''){
		alert("请输入图书价格");
		fom.jg.select();
		return false;
		}
	if(fom.zk.value==''){
		alert("请输入折扣");
		fom.zk.select();
		return false;
		}
	if(fom.file.value==''){
		alert("请输入图片");
		fom.tp.select();
		return false;
		}
	if(fom.jj.value==''){
		alert("请输入简介");
		fom.jj.select();
		return false;
		}
	}
	
</script>
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
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加商品</p>
  <form action="/ttt11/admin.php/Book/BookAdd" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书名称:</div></td>
              <td  bgcolor="#FFFFFF"><input name="bookname" type="text" id="name" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>书号:</div></td>
              <td  bgcolor="#FFFFFF"><input name="isbn" type="text" id="sh" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书类型:</div></td>
              <td  bgcolor="#FFFFFF">
              	<select name="typeid" style="margin-left:10px;">
                	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["typeid"]); ?>"><?php echo ($type["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>作者:</div></td>
              <td  bgcolor="#FFFFFF"><input name="author" type="text" id="zz" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版社:</div></td>
              <td><input name="pubhouse" type="text" id="cbs" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版时间:</div></td>
              <td>
                <select id="nian" name="nian" style="margin-left:10px;">
                	<?php $__FOR_START_19130__=1900;$__FOR_END_19130__=2019;for($i=$__FOR_START_19130__;$i < $__FOR_END_19130__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
                </select>年
                <select id="yue" name="yue">
                	<?php $__FOR_START_11627__=1;$__FOR_END_11627__=13;for($i=$__FOR_START_11627__;$i < $__FOR_END_11627__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
                </select>月
                <select id="ri" name="ri">
                	<?php $__FOR_START_8392__=1;$__FOR_END_8392__=32;for($i=$__FOR_START_8392__;$i < $__FOR_END_8392__;$i+=1){ ?><option><?php echo ($i); ?></option><?php } ?>
                </select>日
              </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书价格:</div></td>
              <td><input name="bookprice" type="text" id="jg" />
                <font color="#FF0000">元</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>折扣:</div></td>
              <td><input name="vipprice" type="text" id="zk" />
                <font style="color:#F00">例:如是7.5就是打7.5折</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书图片:</div></td>
              <td><input name="photo" type="file" id="tp" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书简介:</div></td>
              <td><textarea name="introduction" cols="30" rows="5" style="margin-left:10px;" ></textarea></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>是否推荐:</div></td>
              <td><input name="recommend" type="radio" value="1" checked="checked"/>
                是
                <input name="recommend" type="radio" value="0" />
                否</td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书预售:</div></td>
              <td><input name="newbook" type="radio" value="1" checked="checked"/>
                是
                <input name="newbook" type="radio" value="0" />
                否</td>
            </tr>
            <tr style="text-align:center;">
              <td colspan="2" bgcolor="#FFFFFF">
                <input type="submit" name="ok"  value="提&nbsp;交" style=" margin-right:10px;"/>
                <input type="reset"  value="重&nbsp;置"/></td>
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