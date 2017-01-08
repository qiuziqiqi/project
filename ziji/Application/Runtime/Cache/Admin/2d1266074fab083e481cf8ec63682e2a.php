<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：管理品牌</div>
<table  width="1000">
	<tr height="30" style="font-weight:bold;">
		<td>id</td>
		<td>名称</td>
		<td>分类</td>
		<td>管理</td>
	</tr>
	<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["bname"]); ?></td>
		<td><?php echo ($v["tname"]); ?></td>
		<td><a href="/zj/project/admin.php/Brand/update/id/<?php echo ($v["id"]); ?>">修改</a>&nbsp;|&nbsp;<a href="/zj/project/admin.php/Brand/del/id/<?php echo ($v["id"]); ?>" onclick="if (confirm('确定删除该品牌以及该品牌下所有产品吗？')) return true; else return false;">删除</a></td>
	</tr><?php endforeach; endif; ?>
</table>
<div><?php echo ($pageStr); ?></div>
</body>
</html>