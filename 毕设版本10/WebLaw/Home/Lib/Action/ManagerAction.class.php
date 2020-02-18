<?php
// 本类由系统自动生成，仅供测试用途
class ManagerAction extends Action {
	public function index(){
	}
      public function del_manager(){
	      $m=M('Manager');
	      $id=$_GET['id'];
	      $count=$m->delete($id);
	      if($count>0){
	      $this->success('数据删除成功');
	      }
	      else{
	      $this->error('数据删除失败');
	      }
      }


	public function del_production(){
	      $m=M('Message');
	      $id=$_GET['id'];
	      $count=$m->delete($id);
	      if($count>0){
	      $this->success('数据删除成功');
	      }
	      else{
	      $this->error('数据删除失败');
	      }
	    }
	public function modify_manager(){
		$id=$_GET['id'];
		$m=M('Manager');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	
	}
	
		public function modify_production(){
		$id=$_GET['id'];
		$m=M('Message');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	
		}


		public function modify_comment(){
		$id=$_GET['id'];
		$m=M('Comment');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	
	}

	public function update_manager(){
	        $m=M('Manager');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['password']=$_POST['password'];
		$data['context']=$_POST['context'];
	//	$m->save($data);
	       $count=$m->save($data);
	      if($count>0){
	      $this->success('数据修改成功',U('manager_manager'));
	      }
	      else{
		    $this->error('数据修改失败',U('manager_manager'));
	      }
	}

	public function update_comment(){
	        $m=M('Comment');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['time']=$_POST['time'];
		$data['who']=$_POST['who'];
		$data['substance']=$_POST['substance'];
	//	$m->save($data);
	       $count=$m->save($data);
	      if($count>0){
	      $this->success('数据修改成功',U('manager_comment'));
	      }
	      else{
		    $this->error('数据修改失败',U('manager_comment'));
	      }
	}
		public function update_production(){
	        $m=M('Message');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['linkman']=$_POST['linkman'];
		$data['phone']=$_POST['phone'];
		$data['prize']=$_POST['prize'];
		$data['content']=$_POST['content'];
		$data['title']=$_POST['title'];
		$data['type']=$_POST['type'];
	//	$m->save($data);
	       $count=$m->save($data);
	      if($count>0){
	      $this->success('数据修改成功',U('manager_production'));
	      }
	      else{
		    $this->error('数据修改失败',U('manager_production'));
	      }
	}
//添加页面
//	public function add_manager(){
//	$this->display();
//	}
	public function create_manager(){
		$m=M('Manager');
		$m->username=$_POST['username'];
		$m->password=$_POST['password'];
		$m->context=$_POST['context'];
		$idNum=$m->add();
		 if($idNum>0){
	      $this->success('数据添加成功',U('manager_manager'));
	      }
		 else{
			// $this->error($_POST['']);
	     $this->error('数据添加失败');
	      }
	
	}
		public function create_production(){
		$m=M('Message');
		$data['username']=$_POST['username'];
		$data['linkman']=$_POST['linkman'];
		$data['phone']=$_POST['phone'];
		$data['prize']=$_POST['prize'];
		$data['content']=$_POST['content'];
		$data['title']=$_POST['title'];
		$data['type']=$_POST['type'];
		$idNum=$m->add($data);
		 if($idNum>0){
	      $this->success('数据添加成功',U('manager_production'));
	      }
		 else{
			// $this->error($_POST['']);
	     $this->error('数据添加失败');
	      }
	
	}

	//搜索
	public function search_manager(){
        //获取post的数据，根据得到的条件从数据库中获取数据，返回页面遍
	//	if(isset($_POST['username']) && $_POST['username']!=null){
	//	$where['username']=array('like',"%{$_POST['username']}%");
	//	}
	//	if(isset($_POST['sex']) && $_POST['sex']!=null){
         //	$where['sex']=array('eq',$_POST['sex']);
	//	}
         //	if(isset($_POST['id']) && $_POST['id']!=null){
	//	$where['id']=array('eq',$_POST['id']);
	//	}
		$m=M('Manager');
		$where['id']=array('like',"%{$_POST['word']}%");
		$where['username']=array('like',"%{$_POST['word']}%");
		$where['password']=array('like',"%{$_POST['word']}%");
		$where['context']=array('like',"%{$_POST['word']}%");
		$where['_logic']='or';
   		$arr=$m->where($where)->select();   //where数组中承载条件
		$this->assign('data',$arr);    //将数据分配给前台(将数组给data的标识)
		$this->display('manager_manager');//调用User下的index模版(index模版中有遍历功能)
	//	var_dump($_POST);
	}
	public function search_production(){
		$m=M('Message');
		$where['id']=array('like',"%{$_POST['word']}%");
		$where['username']=array('like',"%{$_POST['word']}%");
		$where['title']=array('like',"%{$_POST['word']}%");
		$where['linkman']=array('like',"%{$_POST['word']}%");
		$where['content']=array('like',"%{$_POST['word']}%");
		$where['type']=array('like',"%{$_POST['word']}%");
		$where['prize']=array('like',"%{$_POST['word']}%");
		$where['phone']=array('like',"%{$_POST['word']}%");
		$where['_logic']='or';
   		$arr=$m->where($where)->select();   //where数组中承载条件
		$this->assign('data',$arr);    //将数据分配给前台(将数组给data的标识)
		$this->display('manager_production');//调用User下的index模版(index模版中有遍历功能)
	//	var_dump($_POST);
	}


		public function search_comment(){
		$m=M('Comment');
		$where['id']=array('like',"%{$_POST['word']}%");
		$where['username']=array('like',"%{$_POST['word']}%");
		$where['who']=array('like',"%{$_POST['word']}%");
		$where['substance']=array('like',"%{$_POST['word']}%");
		$where['_logic']='or';
   		$arr=$m->where($where)->select();   //where数组中承载条件
		$this->assign('data',$arr);    //将数据分配给前台(将数组给data的标识)
		$this->display('manager_comment');//调用User下的index模版(index模版中有遍历功能)
	//	var_dump($_POST);
	}


            public function del_user(){
	      $m=M('User');
	      $id=$_GET['id'];
	      $count=$m->delete($id);
	      if($count>0){
	      $this->success('数据删除成功');
	      }
	      else{
	      $this->error('数据删除失败');
	      }
	    }

		public function modify_user(){
		$id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	
	}

	public function update_user(){
	        $m=M('User');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['password']=$_POST['password'];
		$data['phone']=$_POST['phone'];
	//	$m->save($data);
	       $count=$m->save($data);
	      if($count>0){
	      $this->success('数据修改成功',U('manager_user'));
	      }
	      else{
		      $this->error('数据修改失败',U('manager_user'));
	      }
	}
//添加页面
//	public function add_manager(){
//	$this->display();
//	}
	public function create_user(){
		$m=M('User');
		$m->username=$_POST['username'];
		$m->password=$_POST['password'];
		$m->phone=$_POST['phone'];
		$idNum=$m->add();
		 if($idNum>0){
	      $this->success('数据添加成功',U('manager_user'));
	      }
		 else{
			// $this->error($_POST['']);
	     $this->error('数据添加失败');
	      }
	
	}
	public function create_comment(){
		$m=M('Comment');
		$m->username=$_POST['username'];
		$m->who=$_POST['who'];
		$m->time=$_POST['time'];
		$m->substance=$_POST['substance'];
		$idNum=$m->add();
		 if($idNum>0){
	      $this->success('数据添加成功',U('manager_comment'));
	      }
		 else{
			// $this->error($_POST['']);
	     $this->error('数据添加失败');
	      }
	
	}

	//搜索
	public function search_user(){
        //获取post的数据，根据得到的条件从数据库中获取数据，返回页面遍
	//	if(isset($_POST['username']) && $_POST['username']!=null){
	//	$where['username']=array('like',"%{$_POST['username']}%");
	//	}
	//	if(isset($_POST['sex']) && $_POST['sex']!=null){
         //	$where['sex']=array('eq',$_POST['sex']);
	//	}
         //	if(isset($_POST['id']) && $_POST['id']!=null){
	//	$where['id']=array('eq',$_POST['id']);
	//	}
		$m=M('User');
		$where['id']=array('like',"%{$_POST['word']}%");
		$where['username']=array('like',"%{$_POST['word']}%");
		$where['password']=array('like',"%{$_POST['word']}%");
		$where['phone']=array('like',"%{$_POST['word']}%");
		$where['_logic']='or';
   		$arr=$m->where($where)->select();   //where数组中承载条件
		$this->assign('data',$arr);    //将数据分配给前台(将数组给data的标识)
		$this->display('manager_user');//调用User下的index模版(index模版中有遍历功能)
	//	var_dump($_POST);
	}

	public function manager_manager(){
		
		if($_SESSION['type']==1){

	     import('ORG.Util.Page');// 导入分页类
		$m=M('Manager');
		$count=$m->count();
		$page=new Page($count,10);// 获取数据的总数
	        $show=$page->show();
		$where['id']=$_SESSION['id'];
	        $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$arr);
		$this->assign('show',$show);
		}
		else{
			$this->error('你没有这个权限！');
		}
	    $this->display();
	}
	public function manager_user(){
	     import('ORG.Util.Page');// 导入分页类
		$m=M('User');
		$count=$m->count();
		$page=new Page($count,10);// 获取数据的总数
	        $show=$page->show();
		$where['id']=$_SESSION['id'];
	        $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$arr);
		$this->assign('show',$show);
	    $this->display();
	   }
	 public function manager_production(){

	     import('ORG.Util.Page');// 导入分页类
		$m=M('Message');
		$count=$m->count();
		$page=new Page($count,10);// 获取数据的总数
	        $show=$page->show();
		$where['id']=$_SESSION['id'];
	        $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$arr);
		$this->assign('show',$show);
	    $this->display();
	 }

         public function del_comment(){
	      $m=M('Comment');
	      $id=$_GET['id'];
	      $count=$m->delete($id);
	      if($count>0){
	      $this->success('数据删除成功');
	      }
	      else{
	      $this->error('数据删除失败');
	      }
      }
        public function manager_comment(){

	     import('ORG.Util.Page');// 导入分页类
		$m=M('Comment');
		$count=$m->count();
		$page=new Page($count,10);// 获取数据的总数
	        $show=$page->show();
		$where['id']=$_SESSION['id'];
	        $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('data',$arr);
		$this->assign('show',$show);
	    $this->display();
	}


               public function manager_reply(){
	       
		       $m=M('Comment');
		       $arr=$m->order('username')->select();
		       $this->assign('data',$arr);
		       $this->display();
	       }


}
?>
