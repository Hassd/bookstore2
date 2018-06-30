<?php
namespace Home\Controller;
use Think\Controller;
class XiangxiController extends Controller {
    public function Xiangxi(){


		$gonggao=M("Gonggao");
		$listgao=$gonggao->limit('0, 9')->select();
		$this->assign('listgao',$listgao);

		$id=$_GET['id'];
		$book=M("Book");
		$list=$book->where("bookid=$id")->find();
		$this->assign('list',$list);

		
        $this->display("xiangxi/xiangxi");
    }
	
}