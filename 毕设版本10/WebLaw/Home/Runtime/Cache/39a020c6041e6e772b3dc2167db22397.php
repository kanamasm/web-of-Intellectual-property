<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>信息回复</title>
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
                <div class="details">
                            <div class="text">           
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="20%">用户</th>
				<th width="20%">发送人</th>
                                <th width="20%">时间</th>
				 <th width="20%">内容</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				    <td><label for="c1" class="label"><?php echo ($vo["username"]); ?></label></td>
				     <td><?php echo ($vo["who"]); ?></td>
				    <td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
				    <td><?php echo ($vo["substance"]); ?></td>
				    <td align="center"><a href="/WebLaw/index.php/Other/manager_ask/username/<?php echo ($vo["username"]); ?>"><input type="button" value="回复" class="btn"></a>
					   </td>
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
                            <dd><a href="__URL__/manager_production">产品信息</a></dd>
			    <dd><a href="__URL__/manager_comment">留言信息</a></dd>
                        </dl>
                    </li>
		    <li>
                        <h3><span>*</span>信息回复</h3>
                        <dl>
			    <dd><a style="color:hsl(185, 97%, 45%);" href="__URL__/manager_reply">信息回复</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>