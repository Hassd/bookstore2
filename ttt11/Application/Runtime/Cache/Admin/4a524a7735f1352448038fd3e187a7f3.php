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
  <form action="/ttt11/admin.php/Book/BookSave/bookid/<?php echo ($list["bookid"]); ?>" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1">
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书名称:</div></td>
              <td  bgcolor="#FFFFFF"><input name="bookname" value="<?php echo ($list["bookname"]); ?>" type="text" id="name" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>书号:</div></td>
              <td  bgcolor="#FFFFFF"><input name="isbn" value="<?php echo ($list["isbn"]); ?>" type="text" id="sh" /></td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>图书类型:</div></td>
              <td  bgcolor="#FFFFFF">

                <select id="lx" name="typeid" style="margin-left:10px;">
                	<?php if(is_array($typelist)): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i; if(($type["typeid"]) == $list["typeid"]): ?><option value="<?php echo ($type["typeid"]); ?>" selected="selected"><?php echo ($type["typename"]); ?></option>
                        <?php else: ?>
                       		<option value="<?php echo ($type["typeid"]); ?>"><?php echo ($type["typename"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                 </select>
              </td>
            </tr>
            <tr>
              <td  bgcolor="#FFFFFF"><div>作者:</div></td>
              <td  bgcolor="#FFFFFF"><input value="<?php echo ($list["author"]); ?>" name="author" type="text" id="zz" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版社:</div></td>
              <td><input name="pubhouse" value="<?php echo ($list["pubhouse"]); ?>" type="text" id="cbs" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>出版时间:</div></td>
              <td>
                <select id="nian" name="nian" style="margin-left:10px;"></select>年
                <select id="yue" name="yue"></select>月
                <select id="ri" name="ri"></select>日
              </td>
              <script>
                  var nn=document.getElementById('nian');
                  var yy=document.getElementById('yue');
                  var rr=document.getElementById('ri');

                  var time="<?php echo ($list["pubdate"]); ?>";
                  var arr=time.split("-");
                  var uu="";
                  var jj="";
                  var mm="";
                  for(var i=1980;i<2019;i++){
                    if(i==arr[0]){
                      uu=uu +"<option selected>"+i+"</option>";
                    }else{
                      uu=uu +"<option>"+i+"</option>";
                    }
                  }
                  for(var i=1;i<13;i++){
                    if(i==arr[1]){
                      jj=jj +"<option selected>"+i+"</option>";
                    }else{
                      jj=jj +"<option>"+i+"</option>";
                    }
                  }
                  for(var i=1;i<32;i++){
                    if(i==arr[2]){
                      mm=mm +"<option selected>"+i+"</option>";
                    }else{
                      mm=mm +"<option>"+i+"</option>";
                    }
                  }
                  nn.innerHTML=uu;
                  yy.innerHTML=jj;
                  rr.innerHTML=mm;
                </script>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书价格:</div></td>
              <td><input name="bookprice" value="<?php echo ($list["bookprice"]); ?>" type="text" id="jg" />
                <font color="#FF0000">元</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>折扣:</div></td>
              <td><input name="vipprice" value="<?php echo ($list["vipprice"]); ?>" type="text" id="zk" />
                <font style="color:#F00">例:如是7.5就是打7.5折</font></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书图片:</div></td>
              <td><img src="/ttt11/Uploads/<?php echo ($list["photo"]); ?>" width="50px" height="50px"><input name="photo" type="file" id="tp" /></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书简介:</div></td>
              <td><textarea name="introduction" cols="30" rows="5" style="margin-left:10px;" ><?php echo ($list["introduction"]); ?></textarea></td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>是否推荐:</div></td>
              <td>
              	<?php if(($list["recommend"]) == "1"): ?><input name="recommend" checked="checked" type="radio" value="1" />是
                	<input name="recommend" type="radio" value="0" />否
                <?php else: ?>
                	<input name="recommend" type="radio" value="1" />是
                	<input name="recommend" checked="checked" type="radio" value="0" />否<?php endif; ?>
              </td>
            </tr>
            <tr  bgcolor="#FFFFFF">
              <td><div>图书预售:</div></td>
              <td>
              	<?php if(($list["newbook"]) == "1"): ?><input name="newbook" checked="checked" type="radio" value="1"/>是
               		<input name="newbook" type="radio" value="0" />否
                <?php else: ?>
                    <input name="newbook" type="radio" value="1"/>是
                    <input name="newbook" checked="checked" type="radio" value="0" />否<?php endif; ?>
              </td>
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