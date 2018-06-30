<?php
namespace Home\Controller;
use Think\Controller;
class YudingController extends Controller {
    public function Yuding(){
		//$id=$_GET['id'];
		//$gonggao=M("Gonggao");
		//$list=$gonggao->where("id=$id")->find();
		//$this->assign('list',$list);
		$gonggao=M("Gonggao");
		$listgao=$gonggao->limit('0, 9')->select();
		$this->assign('listgao',$listgao);
		
		$type=$_GET['type'];
		$book=M("Book");
		
		
		
		
		if($type==1){
			$count=$book->where("recommend=1")->count();
			$page=new \Think\Page($count,4);
			$show =$page->show();			
			$list=$book->where("recommend=1")->limit($page->firstRow.','.$page->listRows)->select();
			
		}else if($type==2){
			$count=$book->where("newbook=1")->count();
			$page=new \Think\Page($count,4);
			$show =$page->show();
			$list=$book->where("newbook=1")->limit($page->firstRow.','.$page->listRows)->select();
			
		}else if($type==3){
			$typeid=$_GET['typeid'];
			$count=$book->where("typeid=$typeid")->count();
			$page=new \Think\Page($count,4);
			$show =$page->show();
			$list=$book->where("typeid=$typeid")->limit($page->firstRow.','.$page->listRows)->select();
		}
		
		$this->assign('list',$list);
		$this->assign('page',$show);
		
       	$this->display("yuding/yuding");
		
		
    }
	
	public function Soushuo(){
		$type=$_POST['ghg'];
		$text=$_POST['text'];
		$book=M("Book");

		$gonggao=M("Gonggao");
		$listgao=$gonggao->limit('0, 9')->select();
		$this->assign('listgao',$listgao);
		
		if($type==1){
			$count=$book->where("bookname like '%$text%'")->count();
			$page=new \Think\Page($count,4);
			$show =$page->show();			
			$list=$book->where("bookname like '%$text%'")->limit($page->firstRow.','.$page->listRows)->select();
		}else{
			$count=$book->where("author like '%$text%'")->count();
			$page=new \Think\Page($count,4);
			$show =$page->show();			
			$list=$book->where("author like '%$text%'")->limit($page->firstRow.','.$page->listRows)->select();
		}
		if($list>0){
			$this->assign('list',$list);
			$this->assign('page',$show);
			$this->display("yuding/yuding");
		}else{
			$this->error("搜索失败！");	
		}
		
		
	}
	
}