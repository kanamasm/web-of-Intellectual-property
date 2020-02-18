<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加用户数据</title>
<link rel="stylesheet" href="__PUBLIC__/Css/backstage.css">
	      <style>
.reg_link{width:115px; height:31px; background:url(../images/icon/red_link.jpg) left top no-repeat; position:absolute; right:31px; bottom:-31px;}
.red_logo .comWidth{width:1250px;}
.regBox{width:628px; margin:60px auto; border:#CCC solid 1px;}
.reg_item{font:14px/34px "瀹嬩綋"; width:110px; text-align:right; float:left;}
.reg_item i{color:red; font-style:normal; margin-right:5px;}
.login_input{border:#999 solid 1px; height:32px; line-height:32px9; text-indent:5px; width:100%;}
.input_item{width:306px; float:left;}
.regBox li{height:70px; vertical-align:top;}
.regBox .autoLogin{height:46px; padding:0;}
.regBox .login_cont{padding:45px 76px 20px 76px;}
	.login_input{border:#999 solid 1px; height:32px; line-height:32px9; text-indent:5px; width:100%;}
</style>
</head>

<body>
    <div class="head" style="position:absolute; left:0; top:0px; width:1349px;height:45px;background:hsl(235, 76%, 48%);">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fl">计算机专利交易网后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">添加数据</div>
		<div style="">
                  <div class="regBox">
	<div class="login_cont">

            <form action='__URL__/create_user' method='post' name='myForm'>
		<ul class="login">
			
		<li><span class="reg_item">用户名：</span><div class="input_item"><input type='text' name='username'class="login_input user_icon"/></div></li>
		<li><span class="reg_item">密码：</span><div class="input_item"><input type="text" name='password' class="login_input user_icon"/></div></li>
		<li><span class="reg_item">联系方式：</span><div class="input_item"><input type='text' name='phone' class="login_input user_icon"/></div></li>
		<li><span class="reg_item"><div class="input_item"><input type="submit" value="提交" style="padding:10px 50px;background:hsl(233, 50%, 75%);"/></div></li>                <br/><br/>
			</ul>
                 </form>






	</div>
</div>
                   
		</div>
               
	
            </div>
        </div>
<!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span>*</span>账号管理</h3>
                        <dl>
				 <dd><a style="color:hsl(185, 97%, 45%);" href="__URL__/manager_user">普通用户账号</a></dd>
                        <dd><a href="__URL__/manager_manager">管理员账号</a></dd>
                           
                        </dl>
                    </li>
                    <li>
                        <h3><span>*</span>信息管理</h3>
                        <dl>
                            <dd><a href="__URL__/manager_production">产品信息</a></dd>
				<dd><a href="__URL__/manager_comment">留言信息</a></dd>
                        </dl>
                    </li>
<li>
                        <h3><span>*</span>信息回复</h3>
                        <dl>
			    <dd><a href="__URL__/manager_reply">信息回复</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>