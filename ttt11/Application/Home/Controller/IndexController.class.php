<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$book=M("Book");
		$list=$book->where("recommend=1")->limit('0, 9')->select();
		$this->assign('list',$list);
		
		$gonggao=M("Gonggao");
		$listgao=$gonggao->limit('0, 9')->select();
		$this->assign('listgao',$listgao);
		
		$list2=$book->where("recommend=1 and newbook=1")->limit('0, 10')->select();
		$this->assign('list2',$list2);

        $this->display("index/index");
    }
	
}