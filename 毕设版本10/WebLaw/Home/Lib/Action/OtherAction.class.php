<?php
// 本类由系统自动生成，仅供测试用途
class OtherAction extends Action {
	public function index(){
		
	    $this->display();
	}
	    public function manager_ask(){
            $m=M('Comment');
	    $_SESSION['username']=$_GET['username'];
	    $where['username']=$_GET['username'];
	    $arr=$m->where($where)->order('id asc')->select();
	    $this->assign('data',$arr);
	    $this->display(); 
	    }

	    public function a1(){
		   $m=M('Comment');
		$username=$_SESSION['username'];
		var_dump($username);
         	var_dump($_SESSION['username']);
            $where['username']=$_SESSION['username'];
	    $arr=$m->where($where)->order('id asc')->select();
	    $this->assign('data',$arr);
	   $this->display();

	}

}
		    
