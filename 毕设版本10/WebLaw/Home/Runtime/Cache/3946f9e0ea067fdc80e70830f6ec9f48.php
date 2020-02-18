<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商品介绍</title>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/reset.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body class="grey">
<div class="headerBar" style="position:absolute; left:0; top:0px; width:1349px;height:45px;">
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
				<li><a href="__URL__/user_buy"   class="active" target="_blank">购买专利</a></li>
				<li><a href="__URL__/user_sold" target="_blank">出售专利</a></li>
				<li><a href="__URL__/user_my" target="_blank">我的专利</a></li>
				<li><a href="__URL__/user_law" target="_blank">相关法律知识</a></li>
		 		<li><a href="__URL__/user_ask" target="_blank">在线咨询</a></li>
				<li><a href="__URL__/user_message" target="_blank" >常见问题</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="userPosition comWidth">

</div>
<div  style="padding-top:100px;">
<div class="description_info comWidth" style="margin_top:250px;">
	<div class="description clearfix">
		<div class="leftArea">
			<div class="description_imgs">
				<div class="big">
					<img src="__PUBLIC__/Uploads/<?php echo ($data["filename"]); ?>" onerror="this.src='__PUBLIC__/Images/messagebig2.gif'" style="width:250px;height:300px;"/>
				</div>
			
			</div>
		</div>
		<div class="rightArea">
			<div class="des_content">
				<br/>	<h3 class="des_content_tit"><?php echo ($data["title"]); ?></h3><br/>
				<div class="dl clearfix">
					<div class="dt" style="font-size:17px;width:100px;">专利价</div>
					<div class="dd clearfix"><span class="des_money" ><em>￥</em><?php echo ($data["prize"]); ?></span></div>
				</div>
				<div class="dl clearfix">
					<div class="dt" style="font-size:17px;width:100px;">联系人</div>
					<div class="dd clearfix"><span class="hg" style="font-size:15px;"><?php echo ($data["linkman"]); ?></span></div>
				</div>
				<div class="dl clearfix">
					<div class="dt" style="font-size:17px;width:100px;">联系电话</div>
					<div class="dd clearfix"><span class="hg" style="font-size:15px;"><?php echo ($data["phone"]); ?></span></div>
				</div>
					<div class="dl clearfix">
					<div class="dt" style="font-size:17px;width:100px;">出售时间</div>
					<div class="dd clearfix"><span class="hg" style="font-size:15px;"><?php echo (date('Y-m-d',$data["time"])); ?></span></div>
				</div>
			
			</div>
		</div>
	</div>
</div>
<div class="hr_15"></div>
<div class="des_info comWidth clearfix">

	<div >
		<div class="des_infoContent">
			<ul class="des_tit" >
				<li class="active" style="width:100%;"><span>产品介绍</span></li>
			</ul>
	
			<div class="info_text">
			<br/><br/>
				<div class="info_tit">
					<h3>详细信息</h3>
				</div>
				<p><?php echo ($data["content"]); ?></p><br/><br/>		
			</div>
		</div>



		</div>







		<div class="hr_15"></div>
	



		
				<div class="hr_25"></div>
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