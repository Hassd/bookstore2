<?php
namespace Admin\Controller;
use Think\Controller;
class GongGaoController extends Controller {
    public function GonggaoShow(){
        $gonggao=M('gonggao');
        $count=$gonggao->count();
		$page=new \Think\Page($count,10);
		$show =$page->show();
		
        $list=$gonggao->limit($page->firstRow.','.$page->listRows)->select();
        
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display('gonggao/gonggao');
    }
    public function GonggaoDel(){
		$id=$_GET['id'];
		$gonggao=M('Gonggao');
		$list=$gonggao->where("id=$id")->delete();
		if($list>0){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}  
	public function GonggaoAddShow(){
		$this->display('gonggao/gonggaoadd');
    }
    public function GonggaoAdd(){
        $gonggao=M('Gonggao');

        $gonggao->create();

        $list=$gonggao->add();
        if($list>0){
			$this->success("填加成功！",U(GonggaoShow));
		}else{
			$this->error("填加失败！");
		}
    }
    public function GonggaoSaveShow(){
        $id=$_GET['id'];
        $gonggao=M('Gonggao');
        $list=$gonggao->where("id=$id")->find();
        $this->assign('list',$list);
        $this->display('gonggao/gonggaosave');
    }
    public function GonggaoSave(){
        $id=$_GET['id'];

        $gonggao=M('Gonggao');

        $gonggao->create();

        $list=$gonggao->where("id=$id")->save();
        if($list!==false){
            $this->success("修改成功！",U(GonggaoShow));
        }else{
            $this->error("修改失败！");
        }
    }
    public function GonggaoDelAll(){
        $dataall=$_POST;
        $gonggao=M('Gonggao');
        foreach($dataall as $key=>$value){
            $list=$gonggao->where("id=$key")->delete();
        }
        if($list>0){
			$this->success("删除成功！",U(GonggaoShow));
		}else{
			$this->error("删除失败！");
		}
    }
}