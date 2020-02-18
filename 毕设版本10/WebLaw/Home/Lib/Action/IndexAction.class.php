<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index(){
		$_SESSION['username']=null;
             $this->display();   
    }
  
   	public function doReg(){
	   
                   	$user=D('User');   //
			if(!$user->create()){   //自动创建
				$this->error($user->getError());
			}
		
			$lastId=$user->add();
			if($lastId){
		$this->success('注册成功！',U('Login/login_user'));
				//  $this->redirect('Login/login', array('cate_id' => 2), 3, '注册成功，请登录！');
			//	 $this->redirect('Login/login');
				
		}else{
				$this->error('用户注册失败');
				}
		//	$username=$_POST['username'];
	               // $password=$_POST['password'];
		//	var_dump($username);
		//	var_dump($password);
		//	$this->error('no no no ');
	                  
	
	}
             //检查用户是否注册过

			public function checkName(){

				$username=$_GET['username'];
				//	echo $username;
				//username交给回调函数中的data	 
				$user=M('User');
	                        $where['username']=$username;
				$i=$user->where($where)->count();
				if($i){
				echo '此用户名已被注册';
				
				}
				else{
				echo '此用户名可用';
				}

}
}
		    
