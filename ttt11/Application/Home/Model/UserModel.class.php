<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate = array(
		array("username","require","账号不能为空！",1),
		array("username","","账号已存在！",1,"unique",1),
		array("password","6,20","密码长度不正确！",0,"length"),
		array("qrmm","password","确认密码不一致！",0,'confirm'),
		array("tel","11","电话号码不正确！",2,"length"),
		array("email","email","Email格式不正确！"),
		array("yzm","check_verify","验证码不正确！",0,"callback",1)
	);

	function check_verify($code){
		$verify=new \Think\Verify();
		return $verify->check($code);
	}
}