<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算机专利网-购买专利</title>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/reset.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/Css/main.css">
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
<div class="hr_15"></div>
<div class="comWidth clearfix products">
	<div class="leftArea">
		<div class="leftArea">
		<div class="leftNav">
			<h3 class="nav_title">购买专利</h3>
			<div class="nav_cont">
				<h3>专利类型</h3>
				<ul class="navCont_list clearfix">
					<li><a href="__URL__/user_buy/type/0">全部专利</a></li>
					<li><a href="__URL__/user_buy/type/1" title="1">计算机发明型专利</a></li>
					<li><a href="__URL__/user_buy/type/2" title="2">计算机实用型专利</a></li>
					<li><a href="__URL__/user_buy/type/3" title="3">计算机新型专利</a></li>
					<li><a href="__URL__/user_buy/type/4" title="4">计算机论文专利</a></li>
					<li><a href="__URL__/user_buy/type/5" title="5">计算机软件著作权</a></li>
					<li><a href="__URL__/user_buy/type/6" title="6">其他类型专利</a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>

	<div class="rightArea">
		<div class="hr_7"></div>
		<div class="products_title">
			<h3 >专利介绍</h3>
		</div>
		<div class="products_list clearfix">

			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
				<div class="item_cont">
					<div class="img_item">
						<a href="__URL__/message_detail/id/<?php echo ($vo["id"]); ?>">
							<img src="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>" style="height:170px;width:160px;" onerror="this.src='__PUBLIC__/Images/messagessmall1.gif'"/></a>


					</div>
					<p><a href="__URL__/message_detail/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></p>
					<p class="money">￥<?php echo ($vo["prize"]); ?></p>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>

                  <div class="hr_25" style="height:50px;font-size:17px;">
                  <center>          
	<p> <?php echo ($show); ?><br/></p>
	<p>  <a href='__URL__/user_buy'>返回首页</a></p>
	</center>

</div>
<div class="footer">
	<p>客服热线：123-456-789</p>
	<p>计算机专利网版权所有&nbsp;&nbsp;&nbsp;欢迎使用&nbsp;&nbsp;&nbsp;欢迎提出建议及意见&nbsp;&nbsp;&nbsp;希望您有一个愉快的交易</p>
	<p class="web"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"><img src="__PUBLIC__/Images/webLogo.jpg" alt="logo"></p>
</div>
</body>
</html>