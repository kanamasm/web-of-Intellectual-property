<?php
// 本类由系统自动生成，仅供测试用途
class OpeartionAction extends Action {
                // import('ORG.Util.Page');// 导入分页类
       public function index(){
       
       }

	public function user(){
		 if($_SESSION['username']==null){
			
		   $this->error('请先登录',U('Login/login_user'));
		  }
		  else{
	$username=$_SESSION['username'];
		$this->assign('data',$username);
	$this->display();
		  }
	}	
       public function getmessage(){     
		$message=D('Message');   
			if(!$message->create()){   //自动创建
				$this->error($message->getError());
			}

		import('ORG.Net.UploadFile');
		$upload=new UploadFile();// 实例化上传类
	//	$upload->maxSize= 3145728 ;// 设置附件上传大小
		$upload->allowExts= array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath='./Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()){// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info=$upload->getUploadFileInfo();
		}

		$message->filename=$info[0]['savename'];
			$message->time=time();
		        $message->username=$_SESSION['username'];
			$lastId=$message->add();
			if($lastId){
			//	$data['id']=$lastId;
			//	$data['username']=$_SESSION['username'];
			//	$message->save($data);
				$_SESSION['title']=$_POST['title'];
				$_SESSION['linkman']=$_POST['linkman'];
				$_SESSION['id']=$lastId;
				$this->success('添加出售产品成功！',U('Opeartion/user_buy'));
			}else{

				$this->error('失败');
		}
	}

			public function user_buy(){
		 import('ORG.Util.Page');// 导入分页类
		$m=M('Message');
		 $type=$_GET['type'];
		 $name=$_SESSION['username'];
		//	$where['id']=$_SESSION['id'];
		if($type==0){
			$count=$m->count();
			$page=new Page($count,12);// 获取数据的总数
			$show=$page->show();
			$arr=$m->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
			$this->assign('show',$show);
			$this->assign('name',$name);
		}
		else{
			$where['type']=$_GET['type'];
			$count=$m->where($where)->count();
			$page=new Page($count,12);// 获取数据的总数
			$show=$page->show();
			$arr=$m->where($where)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('show',$show);
			$this->assign('name',$name);
		}
		$this->assign('data',$arr);
				   $this->display();
			//	$this->error($where['type']);
	  }
	  public function user_my(){
            import('ORG.Util.Page');// 导入分页类
	    $m=M('Message');
	   $name=$_SESSION['username'];
	   $this->assign('name',$name);
	    $where['username']=$_SESSION['username'];
	    $count=$m->where($where)->count();
            $page=new Page($count,12);// 获取数据的总数
	    $show=$page->show();
	    $arr=$m->where($where)->limit($page->firstRow.','.$page->listRows)->select();
       	    $this->assign('data',$arr);
	    $this->assign('show',$show);
	    $this->display();
	   
	  }

	  public function message_detail(){
		  $name=$_SESSION['username'];
			$this->assign('name',$name);
		$id=$_GET['id'];
		$m=M('Message');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	    }




	  public function user_ask(){
		  $name=$_SESSION['username'];
			$this->assign('name',$name);
		  $m=M('Comment');
		  $where['username']=$_SESSION['username'];
		  $arr=$m->where($where)->order('id asc')->select();
		 $this->assign('data',$arr);
	  $this->display();
	  
	  }

	  public function b1(){
	 $m=M('Comment');
		  $where['username']=$_SESSION['username'];
		  $arr=$m->where($where)->order('id asc')->select();
		 $this->assign('data',$arr);
	  $this->display();
	  }



	  public function user_law(){
	 $name=$_SESSION['username'];
			$this->assign('name',$name);	  
       $this->display();
	  }

	  public function user_sold(){
		   $name=$_SESSION['username'];
			$this->assign('name',$name);
       $this->display();
	  }

	    public function user_message(){
			 $name=$_SESSION['username'];
			$this->assign('name',$name);
		    $this->display();
       
	    }

	
	
}
		    
