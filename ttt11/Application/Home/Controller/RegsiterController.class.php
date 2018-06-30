<?php
namespace Home\Controller;
use Think\Controller;
class RegsiterController extends Controller {
    public function RegsiterShow(){
        $this->display("regsiter/regsiter");
    }
	public function Verify(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 3;
		$Verify->entry();	
	}
	public function Regsiter(){
		$user=D("user");
		if(!$user->create()){
			$this->error($user->getError());
		}else{
			$user->password=md5(I("post.password"));
			$user->regdate=date("Y-m-d");
			$result=$user->add();
			if($result>0){
				$this->success("注册成功！",U("Index/Index"));
			}else{
				$this->error("注册失败！");
			}
			
		}
		
		/*$code=I("post.yzm");
		$verify = new \Think\Verify();    
		if($verify->check($code)){
			$this->success("lalalalaala");
		}else{
			$this->error("rererererer");
		}*/
			
	}
}