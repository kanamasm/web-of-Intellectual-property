<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算机专利网-在线咨询</title>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/reset.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/main.css">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script>
        function jump(){	
		 $('#content').load("#content");
       
                } 
            setInterval('jump()',5000);
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
		</div>
	</div>

	<div class="navBox">
		<div class="comWidth clearfix">
			<div >
				<center>
			       <a style="color:black;" href="__APP__/Manager/manager_reply"><h2>返回后台管理页面</h2></a>
			       </center>	       
			</div>
			
		</div>
	</div>
</div>
<div style="height:550px;">
	<div style="float:left;width:1100px;height:550px;background:hsl(180, 27%, 89%);">

       	<div style="width:1100px;height:30px;background:hsl(223,95%,83%);">
		<center>
		<h2>计算机专利网-在线咨询(客服端)</h2>
                    </center>
		    <div style="height:30px;width:1050px;"></div>
         <div  style="height:290px;width:1075px;">
		   <div style="float:left;width:22px;height:30px;"></div>
		    <div id="content" style="float:right;background:white;width:1050px;height:280px;border:black solid 1px;folat:right;">
			    <textarea id='content' readonly='readonly' wrap="hard" cols='1000' style="width:100%;height:100%;">   <?php if(is_array($data)): foreach($data as $key=>$vo): echo ($vo["who"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>

    <?php echo ($vo["substance"]); ?>
		
    
  &nbsp<?php endforeach; endif; ?>
			   </textarea>
			</div>
			</div>
			<div style="background:white;width:1050px;height:170px;margin-top:10px;margin-left:23px;border:black solid 1px;">
				<form action='__APP__/Message/manager_comment' method='post' enctype='multipart/form-data'>
					 <textarea name='substance' style="backround:red;width:1050px;height:115px;"></textarea>
				<input type='submit'value='发送'style="font-size:15px;margin-left:975px;margin-top:15px;background:hsl(216, 61%, 80%);height:30px;width:60px;">
					 </form>
			</div>
		
		</div>
      
                


		</div>
		<div style="float:left;width:249px;height:550px;background:hsl(180, 27%, 89%);">
			<div style="float:left;width:3px;height:550px;background:black;">
				</div>
				<div style="height:30px;background:hsl(223, 95%, 83%);">
					<center>
						<h2>基本信息</h2>
						</center>
					</div>
			<center>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<p style="font-size:17px;">计算机专利交易平台是一个方便专业人士
购买和出售专利及版权的网站,完全实现买
卖双方实时交流，不在中间收取任何费用，
公开透明。
				</p>
			</center>
			</div>

</div>
<div class="footer">
	<p>客服热线：123-456-789</p>
	<p>计算机专利网版权所有&nbsp;&nbsp;&nbsp;欢迎使用&nbsp;&nbsp;&nbsp;欢迎提出建议及意见&nbsp;&nbsp;&nbsp;希望您有一个愉快的交易</p>
	<p class="web"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"></p>
</div>
</body>
</html>