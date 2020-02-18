<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
	public function index(){
		$m=M('User');
		$arr=$m->select();
	//	var_dump($arr);
		// echo "hello user!";
         $this->assign('data',$arr);
         $this->display();
	}
      public function del(){
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
	public function modify(){
		$id=$_GET['id'];
		$m=M('User');
		$arr=$m->find($id);
	$this->assign('data',$arr);	
	$this->display();
	
	}

	public function update(){
	        $m=M('User');
		$data['id']=$_POST['id'];
		$data['username']=$_POST['username'];
		$data['sex']=$_POST['sex'];
	//	$m->save($data);
	       $count=$m->save($data);
	      if($count>0){
	      $this->success('数据修改成功','index');
	      }
	      else{
	      $this->error('数据修改失败');
	      }
	}
//添加页面
	public function add(){
	$this->display();
	}
	public function create(){
		$m=M('User');
		$m->username=$_POST['username'];
		$m->sex=$_POST['sex'];
		$idNum=$m->add();
		 if($idNum>0){
	      $this->success('数据添加成功','index');
	      }
	      else{
	      $this->error('数据添加失败');
	      }
	
	}

	//搜索
	public function search(){
        //获取post的数据，根据得到的条件从数据库中获取数据，返回页面遍
		if(isset($_POST['username']) && $_POST['username']!=null){
		$where['username']=array('like',"%{$_POST['username']}%");
		}
		if(isset($_POST['sex']) && $_POST['sex']!=null){
         	$where['sex']=array('eq',$_POST['sex']);
		}
         	if(isset($_POST['id']) && $_POST['id']!=null){
		$where['id']=array('eq',$_POST['id']);
		}
		$m=M('User');
		$arr=$m->where($where)->select();   //where数组中承载条件
		$this->assign('data',$arr);    //将数据分配给前台(将数组给data的标识)
		$this->display('index');//调用User下的index模版(index模版中有遍历功能)
	//	var_dump($_POST);
	}


}
?>
