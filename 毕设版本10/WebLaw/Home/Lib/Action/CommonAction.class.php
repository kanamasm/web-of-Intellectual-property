<?php
	class CommonAction extends Action{
	  Public function _initialize(){
	  	//�ж��û��Ƿ��¼��
	    if(!isset($_SESSION['username']) || $_SESSION['username']!=''){
	   $this->redirect('Login/login');
	  }
	  else{
		     // $this->redirect('Login/login'); 
		 }
	  }
		
	}
?>
