<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
	public function index(){
	    $this->display();
	}

    public function do_login_user(){
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $code=$_POST['code'];
	    if($_SESSION['verify']!=md5($code)){
		    $this->error('验证错误！');
	    }

	    $m=M('User');
	  $where['username']=$username;
	 // $where['password']=$password;
	   $i=$m->where($where)->find();
	    if($i){ //有这个用户
		    if($i['password']==$password){
	          $_SESSION['username']=$username;
		  $_SESSION['id']=$i['id'];
	          $this->success('用户登录成功',U('Opeartion/user_buy'));
		    }
		    else{
	    $this->error('密码不正确！');
		    }
		    } 
	    else{
	    $this->error('该用户不存在！');
	    }
    }
             


            public function do_login_manager(){
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $code=$_POST['code'];
	    if($_SESSION['verify']!=md5($code)){
		    $this->error('验证错误！');
	    }

	    $m=M('Manager');
	  $where['username']=$username;
	   $i=$m->where($where)->find();
	  if($i){ //有这个用户
		    if($i['password']==$password){
	          $_SESSION['username']=$username;
		  $_SESSION['id']=$i['id'];
		  $_SESSION['type']=$i['type'];
		 $this->success('用户登录成功',U('Manager/manager_user'));
	        //  $this->success('用户登录成功',U('Manager/manager_manager_super'));
                
		    }
		    else{
	    $this->error('密码不正确！');
		    }
		    } 
	    else{
	    $this->error('该用户不存在！');
	    }
   
}
}	    
