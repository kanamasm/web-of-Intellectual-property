<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>计算机专利交易网-用户登录</title>
		<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/reset.css">
		<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/main.css">
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
              	<style>
               form input.radio{
	       
	        width:25px;
	       }
               form input{

	       margin-top:3px; //jianju
	       width:120px; //changdu
	       height:15px;//kuangdu
	       }
	       form img{
	       position:relative;
	       top:6px;
	       }
		</style>
              <script>
             $(function(){
		var error=new Array();
		$('input[name="username"]').blur(function(){
		var username=$(this).val();
		$.get('__URL__/checkName',{'username':username},function(data){
			if(data=='此用户名已被注册'){
			
				error['username']=1;
				$('#umessage').remove();
				$('input[name="username"]').after('<p id="umessage" style="color:red">该用户名已经注册</p>');
			}else{
				error['username']=0;
				$('#umessage').remove();
			}
					});
				});

				//提交表单
			$('img[title="register"]').click(function(){	
					if(error['username']==1){
						return false;
					}else{
						$('form[name="myForm"]').submit();
					}
				});
			});
	      </script>
           </head>

	<body>
	<div class="headerBar" style="position:absolute; left:0; top:0px; width:1349px;height:45px;">
	<div class="logoBar red_logo">
		<div class="comWidth">
			<div class="logo fl">
				<img src='__PUBLIC__/Images/dabai.jpg'style="padding:0px 10px;width:100px;height:70px;"/>
			</div>
			<h3 class="welcome_title">感谢使用计算机专利交易网，请登录！</h3>
		</div>
	</div>
</div>
<div class="regBox">
	<div class="login_cont">
	<form action='__URL__/do_login_user' method='post' name='myForm'>
		<ul class="login">
			
		<li><span class="reg_item">用户名：</span><div class="input_item"><input type='text' name='username'class="login_input user_icon"/></div></li>
		<li><span class="reg_item">密码：</span><div class="input_item"><input type="password" name='password' class="login_input user_icon"/></div></li>
		<li><span class="reg_item">验 证 码：</span><div class="input_item"><input type='text' name='code' class="login_input user_icon"/></div></li>
		<li><span class="reg_item"><div class="input_item"><img src="__APP__/Public/code"  onclick='this.src=this.src+"?"+Math.random()' style="width:80px;height:30px;"/><img src='__PUBLIC__/Images/b02.gif' title='register' style="padding:10px 50px;"/></div></li>
		</ul>
                 </form>
	</div>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p>客服热线：123-456-789</p>
	<p>计算机专利网版权所有&nbsp;&nbsp;&nbsp;欢迎使用&nbsp;&nbsp;&nbsp;欢迎提出建议及意见&nbsp;&nbsp;&nbsp;希望您有一个愉快的交易</p>
	<p class="web"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"></p>
</div>


	</body>
 
</html>