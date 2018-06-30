<?php
namespace Home\Controller;
use Think\Controller;
class GonggaoController extends Controller {
    public function Gonggao(){
		$id=$_GET['id'];
		$gonggao=M("Gonggao");
		$list=$gonggao->where("id=$id")->find();
		$this->assign('list',$list);
		
        $this->display("gonggao/gonggao");
    }
	
}