<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前操作：修改口令</div>
<form action="/zj/project/admin.php/Login/usave" method="post">
<table width="100%">
	<tr>
		<td width="100">用户名：</td>
		<td><input type="text" name="username" value="<?php echo ($_SESSION['admin']['username']); ?>"/></td>
	</tr>
	<tr>
		<td width="100">用户名：</td>
		<td>
		<input type="hidden" name="id" value="<?php echo ($_SESSION['admin']['id']); ?>"/>
		<input type="text" name="password" value="<?php echo ($_SESSION['admin']['password']); ?>"/></td>		
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="提交"/></td>
	</tr>
</table>
</form>
</body>
</html>