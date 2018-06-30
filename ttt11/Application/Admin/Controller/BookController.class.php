<?php
namespace Admin\Controller;
use Think\Controller;
class BookController extends Controller {
    public function BookShow(){
        $book=M('Book');
        // $list=$book->select();
        $count=$book->count();
		$page=new \Think\Page($count,13);
		$show =$page->show();
		
        $list=$book->limit($page->firstRow.','.$page->listRows)->select();
        
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display('book/book');
    }

    public function BookDel(){
		$bookid=$_GET['bookid'];
		$book=M('Book');
		$list=$book->where("bookid=$bookid")->delete();
		if($list>0){
			$this->success("删除成功！");
		}else{
			$this->error("删除失败！");
		}
    }
      
	public function BookAddShow(){
		$type=M('Type');
		$list=$type->select();
		$this->assign('list',$list);
		$this->display('book/bookadd');
    }

    public function BookAdd(){
        $book=M('Book');

		$book->create();

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
        $info   =   $upload->uploadOne($_FILES['photo']);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            // echo $info['savepath'].$info['savename'];
            $book->photo=$info['savepath'].$info['savename'];
        }
        $book->pubdate=$_POST['nian']."-".$_POST["yue"]."-".$_POST["ri"];
        //dump($book);
        $list=$book->add();
        if($list>0){
			$this->success("填加成功！",U("BookShow"));
		}else{
			$this->error("填加失败！");
		}
    }


    public function BookSaveShow(){
        /*$bookid=$_GET['bookid'];*/
		
		$bookid=I('get.bookid','','htmlspecialchars');
        $book=M('Book');
		$type=M('type');
		
        $list=$book->where("bookid=$bookid")->find();
		$qwe=$type->select();
		
        $this->assign('list',$list);
		$this->assign('typelist',$qwe);
		
		
        $this->display('book/booksave');
    }

    public function BookSave(){
		/*$bookid=$_GET['bookid'];*/
		
		$bookid=I('get.bookid','','htmlspecialchars');	//为了数据安全 和 $_GET 方法一样

        $book=M('Book');

        $book->create();
		$book->pubdate=$_POST['nian']."-".$_POST["yue"]."-".$_POST["ri"];
	
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传单个文件
		$info   =   $upload->uploadOne($_FILES['photo']);
		
		if(!$info) {// 上传错误提示错误信息
			$list=$book->where("bookid=$bookid")->save();
		}else{// 上传成功 获取上传文件信息
			// echo $info['savepath'].$info['savename'];
			$book->photo=$info['savepath'].$info['savename'];
        	$list=$book->where("bookid=$bookid")->save();
		}
        if($list!==false){
            $this->success("修改成功！",U("BookShow"));
        }else{
            $this->error("修改失败！",U("BookSaveShow"));
        }
    }
    
    public function BookDelAll(){
        $dataall=$_POST;
        $book=M('Book');
        foreach($dataall as $key=>$value){
            $list=$book->where("bookid=$key")->delete();
        }
        if($list>0){
			$this->success("删除成功！",U("BookShow"));
		}else{
			$this->error("删除失败！");
		}
    }
}