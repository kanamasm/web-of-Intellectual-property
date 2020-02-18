<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>产品信息管理</title>
<link rel="stylesheet" href="__PUBLIC__/Css/backstage.css">
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
                <div class="title">操作界面</div>
		<div style="height:70px;">

                 <div style="padding:20px 100px;float:left;">
				<a href="/WebLaw/index.php/Manager/add_production"><input type="button" value="增加" class="btn"></a>
		</div>
		<div style="padding:20px 100px;float:right;">
			 <form action="/WebLaw/index.php/Manager/search_production" method='post' name='myForm'>
				 <p> <input type="text" name="word" style="border:black solid 1px;height:30px;">
				 <input type="submit" value="搜索" class="btn"></p>
			 </form>
		</div>

		</div>
                <div class="details">
                            <div class="text">           
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="5%">编号</th>
				<th width="20%">标题</th>
				<th width="10%">联系人</th>
				<th width="10%">联系电话</th>
				<th width="5%">价格</th>
				<th width="5%">类型</th>
				 <th width="15%">简介</th>
				 <th width="10%">上传用户</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				    <td><label for="c1" class="label"><?php echo ($vo["id"]); ?></label></td>
				    <td><?php echo ($vo["title"]); ?></td>
				    <td><?php echo ($vo["linkman"]); ?></td>
				    <td><?php echo ($vo["phone"]); ?></td>
				    <td><?php echo ($vo["prize"]); ?></td>
				    <td><?php echo ($vo["type"]); ?></td>
				    <td><?php echo ($vo["content"]); ?></td>
				    <td><?php echo ($vo["username"]); ?></td>
				    <td align="center"><a href="/WebLaw/index.php/Manager/modify_production/id/<?php echo ($vo["id"]); ?>"><input type="button" value="修改" class="btn"></a>
					    <a href="/WebLaw/index.php/Manager/del_production/id/<?php echo ($vo["id"]); ?>"><input type="button" value="删除" class="btn"></a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
		<div style="width:1349px;">
		<p style="padding:20px 500px;float:left;width:250px;"><?php echo ($show); ?></p>
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
                           	 <dd><a href="__URL__/manager_user">普通用户账号</a></dd>
                        <dd><a href="__URL__/manager_manager">管理员账号</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span>*</span>信息管理</h3>
                        <dl>
                            <dd><a style="color:hsl(185, 97%, 45%);" href="__URL__/manager_production">产品信息</a></dd>
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