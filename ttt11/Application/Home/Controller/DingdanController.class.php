<?php
namespace Home\Controller;
use Think\Controller;
class DingdanController extends Controller {
    public function Dingdan(){
		if(isset($_SESSION['userid'])){
			$this->display("dingdan/dingdan");
		}else{
			$this->error("请先登录！",U("login/loginshow"),2);
		}
			
    }
	
	public function DingdanAdd(){
		$dingdan=M("Dingdan");
		$dingdan->create();
		
		$userid=session('userid');
		$gwc=M("Gwc");
		$zxc=$gwc->where("userid=$userid")->select();
		if($zxc>0){
			foreach($zxc as $k=>$val){
				$lkj .=$zxc[$k]['booknum']."@";
				$poi .=$zxc[$k]['bookname']."@";
				$mnb +=$zxc[$k]['bookprice'];
			}	
		}else{
			$this->error("添加订单失败！");
		}
		
		$dingdan->spc=$poi;	
		$dingdan->slc=$lkj;
		$dingdan->total=$mnb;
		$dingdan->userid=$userid;
		$dingdan->orderdate=date("Y-m-j");
		$dingdan->zt="未发货";
		
		$list=$dingdan->add();
		
		if($list>0){
			$lst2=$gwc->where("userid=$userid")->delete();
			if($lst2>0){
				$this->success("添加订单成功！",U("index/index"));
			}
        }else{
            $this->error("添加订单失败！");
        }
    }
	public function DingdanShow(){
		if(isset($_SESSION['userid'])){
			$userid=session('userid');
			$dingdan=M("Dingdan");
			$list=$dingdan->where("userid=$userid")->select();
			if(count($list)){
				$this->assign('list',$list);
				$this->display("dingdan/dingdanshow");
			}else{
				$this->error("订单为空！",U("index/index"),2);
			}
		}else{
			$this->error("请先登录！",U("login/loginshow"),2);	
		}
	}
	public function DingdanDel(){
		$id=$_GET['id'];
		$dingdan=M("Dingdan");
		$list=$dingdan->where("orderid=$id")->delete();
		if($list>0){
			$this->success("删除成功！",U("dingdan/dingdanshow"));		
		}else{
			$this->error("删除失败！");
		}
	}
	public function DingdanAllDel(){
		$userid=session('userid');
		$dingdan=M("Dingdan");
		$list=$dingdan->where("userid=$userid")->delete();
		if($list>0){
			$this->success("删除成功！",U("dingdan/dingdanshow"));		
		}else{
			$this->error("删除失败！");
		}
	}
}