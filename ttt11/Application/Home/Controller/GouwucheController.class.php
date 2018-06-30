<?php
namespace Home\Controller;
use Think\Controller;
class GouwucheController extends Controller {

	public function Gouwucheshow(){
		if(isset($_SESSION['userid'])){
			$userid=session('userid');
			$gwc=M("Gwc");
			$list=$gwc->where("userid=$userid")->select();
			if(count($list)){
				//$this->assign('list',$list);

				session("uit",$list);
				$arr=session('uit');
				foreach($arr as $key=>$val){
					$zzz +=$arr[$key]['booknum']*$arr[$key]['bookprice'];
				}
				$this->assign('zzz',$zzz);

				$this->display("gouwuche/gouwuche");
				
			}else{
				$this->error("购物车为空！",U("index/index"),2);	
			}
			
		}else{
			if(count(session('uit'))){
				$arr=session('uit');
				foreach($arr as $key=>$val){
					$zzz +=$arr[$key]['booknum']*$arr[$key]['bookprice'];
				}
				$this->assign('zzz',$zzz);
				$this->display("gouwuche/gouwuche");
			}else{
				$this->error("购物车为空！",U("index/index"),2);	
			}
		}
	}

    public function Gouwuche(){
		$bookid=$_GET['bookid'];
		$num=$_POST['num'];
		$arr=session('uit');
		if(array_key_exists($bookid,$arr)){
			$arr[$bookid]['booknum'] +=$num;

			if(isset($_SESSION['userid'])){
				$userid=session('userid');
				$data['booknum']=$list['booknum']+$num;
				$list3=$gwc->where("userid=$userid and bookid=$bookid")->save($data);
			}

		}else{
			$book=M("Book");
			$tyt=$book->where("bookid=$bookid")->find();
			$arr[$bookid]=array('bookid'=>$bookid,'booknum'=>$num,'bookname'=>$tyt['bookname'],'bookprice'=>$tyt['bookprice'],'photo'=>$tyt['photo']);
			
			if(isset($_SESSION['userid'])){
				$userid=session('userid');
				$data=$arr[$bookid];
				$data['userid']=$userid;
				$gwc=M('Gwc');
				$vf=$gwc->data($data)->add();
			}
			
		}
			
		session('uit',$arr);
		$this->success('加入完成',U("gouwucheshow"),1);





		// if(isset($_SESSION['userid'])){
		// 	$userid=session('userid');
		// 	$bookid=$_GET['bookid'];
		// 	$num=$_POST['num'];
	
		// 	$gwc=M("Gwc");
			
		// 	$list=$gwc->where("userid=$userid and bookid=$bookid")->find();
		// 	if($list>0){
		// 		$data['booknum']=$list['booknum']+$num;
		// 		$id=$list['id'];
		// 		$list3=$gwc->where("id=$id")->save($data);
		// 		$this->success('加入完成',U("gouwucheshow"),1);
		// 	}else{
		// 		$book=M("Book");
		// 		$as=$book->where("bookid=$bookid")->find();
		// 		$data['bookid']=$bookid;
		// 		$data['userid']=$userid;
		// 		$data['booknum']=$num;
		// 		$data['bookname']=$as['bookname'];
		// 		$data['bookprice']=$as['bookprice'];
		// 		$data['photo']=$as['photo'];
	
		// 		$rt=$gwc->data($data)->add();
	
		// 		if($rt>0){
		// 			$this->success('加入完成',U("gouwucheshow"),1);
		// 		}else{
		// 			$this->error("加入失败！");
		// 		}
		// 	}	
		// }else{
		// 	$bookid=$_GET['bookid'];
		// 	$num=$_POST['num'];
		// 	$arr=session('uit');
		// 	if(array_key_exists($bookid,$arr)){
		// 		$arr[$bookid]['booknum'] +=$num;
		// 	}else{
		// 		$book=M("Book");
		// 		$tyt=$book->where("bookid=$bookid")->find();
		// 		$arr[$bookid]=array('bookid'=>$bookid,'booknum'=>$num,'bookname'=>$tyt['bookname'],'bookprice'=>$tyt['bookprice'],'photo'=>$tyt['photo']);
		// 	}
				
		// 	session('uit',$arr);
		// 	$this->success('加入完成',U("gouwucheshow"),1);
				
		// 	}
		
	}
	
	public function GouwucheDel(){
		$bookid=$_GET['id'];
		$arr=session('uit');
		unset($arr[$bookid]);

		if(isset($_SESSION['userid'])){
			$userid=session('userid');
			$gwc=M('Gwc');
			$hh=$gwc->where("userid=$userid and bookid=$bookid")->delete();
		}
		session('uit',$arr);
		$this->success("取消成功！",U("gouwucheshow"),1);

		// if(isset($_SESSION['userid'])){
			
		// 	$gouwuche=M("Gwc");
		// 	$list2=$gouwuche->where("id=$id")->delete();
		// 	if($list2>0){


		// 		$this->success("取消成功！",U("gouwucheshow"),1);
		// 	}else{
		// 		$this->error("删除失败！");
		// 	}
		// }else{
		// 	//echo print_r($arr);
		// 	unset($arr[$bookid]);
		// 	session('uit',$arr);
		// 	$this->success("取消成功！",U("gouwucheshow"),1);
		// }
		
	}
	
	public function GouwucheDelAdd(){
		session('uit',null); 
		if(isset($_SESSION['userid'])){
			$userid=session('userid');
			$gwc=M("Gwc");
			$tt=$gwc->where("userid=$userid")->delete();
		}

		$this->success("清空成功！",U("gouwucheshow"),1);
		// if(isset($_SESSION['userid'])){
		// 	$userid=session('userid');
		// 	$gouwuche=M("Gwc");
		// 	$list2=$gouwuche->where("userid=$userid")->delete();
		// 	if($list2>0){
		// 		$this->success("清空成功！",U("gouwucheshow"),1);
		// 	}else{
		// 		$this->error("清空失败！");
		// 	}
		// }else{
		// 	session('uit',null); 
		// 	$this->success("清空成功！",U("gouwucheshow"),1);
		// }
	}
	
	public function Gouwuchegai(){
		$qwe=$_POST;
		$arr=session('uit');
		$gwc=M("Gwc");
		$userid=session('userid');
		foreach($qwe as $key=>$val){
			$arr[$key]['booknum']=$val;
			if(isset($_SESSION['userid'])){
				$data['booknum']=$val;
				$yy=$gwc->where("bookid=$key and userid=$userid")->save($data);
			}
		}
		session('uit',$arr);
		$this->success("修改成功！",U("gouwucheshow"),1);

		// if(isset($_SESSION['userid'])){
		// 	$gwc=M("Gwc");
		// 	foreach($qwe as $kye=>$value){
		// 		$data['booknum']=$value;
		// 		$list3=$gwc->where("id=$kye")->save($data);
		// 	}
		// 	if($list3>0){
		// 		$this->success("修改成功！",U("gouwucheshow"),1);
		// 	}else{
		// 		$this->error("修改失败！");
		// 	}	
		// }else{
		// 	foreach($qwe as $key=>$val){
		// 		$arr[$key]['booknum']=$val;
		// 	}
		// 	session('uit',$arr);
		// 	$this->success("修改成功！",U("gouwucheshow"),1);
		// }
		
	}

	
}