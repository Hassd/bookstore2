<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function LoginShow(){
		$this->display("login/login");
    }
	public function Login(){
		$where["name"]=I("post.username");
		$where["password"]=md5(I("post.password"));
		$code=I("post.yzm");

		$userdata=M("User");
		
		$verify = new \Think\Verify();
		
		if($verify->check($code)){
			
			$result=$userdata->where($where)->find();
			if($result>0){
				session('username',$where['name']);
				session('userid',$result['userid']);
				echo $result['userid'];
				$this->success("登录成功！",U("index/index"));
			}else{
				$this->error("登录失败！");
			}
			
		}else{
			$this->error("验证码错误");
		}	
	}
	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->length   = 3;
		$Verify->useNoise = false;
		$Verify->fontSize = 100;
		$Verify->entry();	
	}
}