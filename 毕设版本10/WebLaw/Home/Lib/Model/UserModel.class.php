﻿<?php
	class UserModel extends Model{   //自动验证
		protected $_validate=array(
			array('code','require','验证码必须填写!'),
			array('code','checkCode','验证码错误!',0,'callback',1),
			array('username','require','用户必须填写!'),
			array('username','','用户已经存在',0,'unique',1),
			array('repassword','password','确认密码不正确',0,'confirm'),    //array(验证字段，验证规则，错误提示，[验证条件，附加条件，验证时间]);
		);

		protected function checkCode($code){
			if(md5($code)!=$_SESSION['verify']){
				return false;
			}else{
				return true;
			}
		}
	}
?>

