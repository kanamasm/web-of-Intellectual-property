<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
</head>
<body>
<div  id="test1">

<textarea style="width:1050px;height:280px;background:white" readonly='readonly' wrap="hard" cols='1000' style="width:100%;height:100%;">   <?php if(is_array($data)): foreach($data as $key=>$vo): echo ($vo["who"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>

    <?php echo ($vo["substance"]); ?>
		
    
  &nbsp<?php endforeach; endif; ?>
	</textarea>
	<div>

</body>
</html>