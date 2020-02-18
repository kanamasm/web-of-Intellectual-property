<?php
// 本类由系统自动生成，仅供测试用途
class MessageAction extends Action {
	public function user_comment(){
	$m=M('Comment');
              $m->create();
		$m->username=$_SESSION['username'];
		$m->who=$_SESSION['username'];
		$m->time=time();
			$lastId=$m->add();
		if($lastId){
			$this->redirect('Opeartion/user_ask');

			}

	}


	public function manager_comment(){
		$user=$_SESSION['username'];
		$m=M('Comment');
                $m->create();
		$m->username=$_SESSION['username'];;
		$m->who='客服';
		$m->time=time();
			$lastId=$m->add();
		if($lastId){
 			$this->redirect('Other/manager_ask', array('username' => $user));
		}
		else{
		$this->error($user);
		}

		
	}
}
?>
