<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function UserShow(){
        $user=M('User');
        $count=$user->count();
		$page=new \Think\Page($count,5);
		$show =$page->show();
		
        $list=$user->limit($page->firstRow.','.$page->listRows)->select();
        
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display('user/user');
    }
    public function UserDel(){
		$userid=$_GET['userid'];
		$user=M('User');
		$list=$user->where("userid=$userid")->delete();
		if($list>0){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}  
    public function userDelAll(){
        $dataall=$_POST;
        $user=M('user');
        foreach($dataall as $key=>$value){
            $list=$user->where("userid=$key")->delete();
        }
        if($list>0){
			$this->success("删除成功！",U(userShow));
		}else{
			$this->error("删除失败！");
		}
    }
}