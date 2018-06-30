<?php
namespace Admin\Controller;
use Think\Controller;
class DingdanController extends Controller {
    public function DingdanShow(){
        $dingdan=M('Dingdan');

        $count=$dingdan->count();
        $page=new \Think\Page($count,10);
		$show =$page->show();
		
		$list=$dingdan->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display('dingdan/dingdan');
    }
    public function DingdanDel(){
		$orderid=$_GET['orderid'];
		$dingdan=M('Dingdan');
		$list=$dingdan->where("orderid=$orderid")->delete();
		if($list>0){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
	}  
    public function DingdanSaveShow(){
        $orderid=$_GET['orderid'];
        $dingdan=M('Dingdan');
        $list=$dingdan->where("orderid=$orderid")->find();
        $this->assign('list',$list);
        $this->display('dingdan/dingdansave');
    }

    public function DingdanSave(){
        $orderid=$_GET['orderid'];
        
        $dingdan=M('Dingdan');
        $dingdan->create();

        $list=$dingdan->where("orderid=$orderid")->save();
        if($list!==false){
            $this->success("修改成功！",U(DingdanShow));
        }else{
            $this->error("修改失败！");
        }
    }
    public function DingdanDelAll(){
        $dataall=$_POST;
        $dingdan=M('Dingdan');
        foreach($dataall as $key=>$value){
            $list=$dingdan->where("orderid=$key")->delete();
        }
        if($list>0){
			$this->success("删除成功！",U(DingdanShow));
		}else{
			$this->error("删除失败！");
		}
    }
}