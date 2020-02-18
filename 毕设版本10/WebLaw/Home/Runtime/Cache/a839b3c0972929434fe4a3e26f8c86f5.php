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
<div style="position:absolute; left:0; top:0px; width:1349px;height:45px;">
<div class="headerBar" >
	<div class="logoBar">
	<div class="comWidth">
			<div class="logo fl">
				<img src='__PUBLIC__/Images/dabai.jpg'style="padding:0px 10px;width:100px;height:70px;"/>
			</div>
			<h3 class="welcome_title">欢迎使用计算机专利交易网</h3>
				<div style="float:right;margin:50px 100px 0px;">
		<h3>Hi,<?php echo ($name); ?>	<a style="padding:10px 15px;color:black;" href="/WebLaw/index.php/Index/index">退出</a></h3>
		
			</div>
			
		</div>
	</div>

	<div class="navBox">
		<div class="comWidth clearfix">
			<div class="shopClass fl">
				<h3>全部功能<i class="shopClass_icon"></i></h3>	
			</div>
			<ul class="nav fl">
				<li><a href="__URL__/user_buy" target="_blank">购买专利</a></li>
				<li><a href="__URL__/user_sold" class="active" target="_blank">出售专利</a></li>
				<li><a href="__URL__/user_my" target="_blank">我的专利</a></li>
				<li><a href="__URL__/user_law" target="_blank">相关法律知识</a></li>
		 		<li><a href="__URL__/user_ask"  target="_blank">在线咨询</a></li>
				<li><a href="__URL__/user_message" target="_blank">常见问题</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="hr_15"></div>

<div class="comWidth clearfix products">
	<div >
		<div class="hr_7"></div>
		<div class="products_title">
			<h3>出售专利</h3>
		</div>

<div class="regBox" style="margin:60px auto;">
	<div class="login_cont">
	<form action='__URL__/getmessage' method='post' name='myForm' enctype='multipart/form-data'>
		<ul class="login">
		<li><span class="reg_item">标题：</span><div class="input_item"><input type='text' name='title'class="login_input user_icon"/></div></li>
			<li><span class="reg_item">联系人：</span><div class="input_item"><input type="text" name='linkman' class="login_input user_icon"/></div></li>
			<li><span class="reg_item">电话：</span><div class="input_item"><input type="text" name='phone' class="login_input user_icon"/></div></li>
			<li><span class="reg_item">价格：</span><div class="input_item"><input type='text' name='prize' class="login_input user_icon"/></div></li>
			<!--<li><span class="reg_item">类型：</span><div class="input_item"><input type='text' name='type' class="login_input user_icon"/></div></li>-->
			<li><span class="reg_item">简介：</span><div class="input_item"><textarea name='content' style="border:gray solid 1px;width:305px;height:100px;"></textarea></div></li>
			<li><span class="reg_item"></span><div class="input_item"></div></li>
			<li><span class="reg_item">上传专利照片：</span><div class="input_item"><input type='file' name='filename'/></div></li>
			<li><span class="reg_item"><div class="input_item"><img src='__PUBLIC__/Images/b02.gif' title='register' style="padding:10px 50px;"/></div></li>
			
		</ul>
                 </form>
	</div>
</div>
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