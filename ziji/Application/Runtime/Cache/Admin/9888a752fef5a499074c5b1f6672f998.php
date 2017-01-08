<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<div>当前操作：管理商品</div>
<table  width="100%" align="center">
	<tr height="30" style="font-weight:bold;">
		<td>id</td>
		<td>名称</td>
		<td>品牌</td>
		<td>产品图片</td>
		<td>管理</td>
	</tr>
	<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["title"]); ?></td>
		<td><?php echo ($v["bname"]); ?></td>
		<td><img height='100' src='/zj/project/Public/images/<?php echo ($v["imagename"]); ?>'/></td>
		<td><a href="/zj/project/admin.php/Product/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/zj/project/admin.php/Product/del/id/<?php echo ($v["id"]); ?>" onclick="if (confirm('确定删除该产品吗？')) return true; else return false;">删除</a></td>
	</tr><?php endforeach; endif; ?>
</table>
<div align="center"><?php echo ($pageStr); ?></div>
</body>
</html>