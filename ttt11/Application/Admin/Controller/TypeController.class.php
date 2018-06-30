<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {
    public function TypeShow(){
        $type=M('Type');
        /*$list=$type->select();*/
		
		$count=$type->count();
		$page=new \Think\Page($count,7);
		$show =$page->show();
		
		$list=$type->limit($page->firstRow.','.$page->listRows)->select();
		
        $this->assign('list',$list);
		$this->assign('page',$show);
        $this->display('type/type');
    }
    public function TypeDel(){
		$typeid=$_GET['typeid'];
		$type=M('Type');
		$list=$type->where("typeid=$typeid")->delete();
		if($list>0){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}  
	public function TypeAddShow(){
		$this->display('type/typeadd');
    }
    public function TypeAdd(){
        $type=M('Type');

        $type->create();

        $list=$type->add();
        if($list>0){
			$this->success("填加成功！",U(TypeShow));
		}else{
			$this->error("填加失败！");
		}
    }
    public function TypeSaveShow(){
        $typeid=$_GET['typeid'];

        $type=M('Type');
        
        $list=$type->where("typeid=$typeid")->find();
        $this->assign('list',$list);
        $this->display('type/typesave');
    }
    public function TypeSave(){
        $typeid=$_GET['typeid'];

        $type=M('Type');
		
		$type->create();
		
        $list=$type->where("typeid=$typeid")->save();
        if($list!==false){
            $this->success("修改成功！",U(TypeShow));
        }else{
            $this->error("修改失败！");
        }
    }
    public function TypeDelAll(){
        $dataall=$_POST;
        $type=M('Type');
        foreach($dataall as $key=>$value){
            $list=$type->where("typeid=$key")->delete();
        }
        if($list>0){
			$this->success("删除成功！",U(TypeShow));
		}else{
			$this->error("删除失败！");
		}
    }
}