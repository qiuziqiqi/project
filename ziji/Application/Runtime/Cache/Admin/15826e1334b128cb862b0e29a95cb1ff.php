<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：修改品牌</div>
<form action="/zj/project/admin.php/Brand/usave" method="post" enctype="multipart/form-data">
<table width="100%">
	<tr>
		<td>名称：</td>
		<td><input value="<?php echo ($arr["bname"]); ?>" type="text" name="bname"/></td>
	</tr>
	<tr>
		<td>分类：</td>
		<td><select name="typeid" id="typeid">
		<?php if(is_array($typearr)): foreach($typearr as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></option><?php endforeach; endif; ?>
		</select></td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="hidden" value="<?php echo ($arr["id"]); ?>" name="id"/>
		<input type='hidden' name="surl" value="<?php echo ($_SERVER['HTTP_REFERER']); ?>"/>
		<input type="submit" value="修改"/></td>
	</tr>
</table>
</form>
</body>
</html>
<script type="text/javascript">
document.getElementById("typeid").value=<?php echo ($arr["typeid"]); ?>;
</script>