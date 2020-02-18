<?php
	class CommonAction extends Action{
	  Public function _initialize(){
	  	//判断用户是否登录过
	    if(!isset($_SESSION['username']) || $_SESSION['username']!=''){
	   $this->redirect('Login/login');
	  }
	  else{
		     // $this->redirect('Login/login'); 
		 }
	  }
		
	}
?>
