<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function LoginShow(){
        $this->display('login/index');
    }
    public function Login(){
        $where["name"]=I("post.username");
		$where["password"]=md5(I("post.password"));
		$code=I("post.yzm");

		$userdata=M("Admin");
		
		$verify = new \Think\Verify();
		
		if($verify->check($code)){
			
			$result=$userdata->field("id")->where($where)->find();
			if($result){
				$this->success("登录成功！",U("book/bookshow"));
			}else{
				$this->error("登录失败！");
			}
			
		}else{
			$this->error("验证码错误");
		}
		
    }
	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->fontSize = 100;
		$Verify->entry();	
	}
}