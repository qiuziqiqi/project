<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="/zj/project/Public/js/jquery-1.8.0.js"></script>
<script type="text/javascript">
function getBrand(){
	//获取typestr下拉框中选中的option value属性值。
	var typevalue=$("#typestr").val();//>2>8>
	//从value属性值中把一级分类的id获取出来(使用正则表达式)
	var arr=typevalue.match(/^>(\d+)/);
	var id=arr[1];
	//启动ajax，去获取一级分类下的品牌
	$.ajax({
		url:'/zj/project/admin.php/Product/getbrand',
		data:{'firstid':id},//firstid=id&a=6
		success:function(re){
			$("#brandid").empty();
			$("#brandid").append(re);
		}
	})
}
</script>
</head>
<body>
<div>当前操作：添加产品</div>
<form action="/zj/project/admin.php/Product/save" method="post" enctype="multipart/form-data">
<table width="100%">
	<tr>
		<td>标题：</td>
		<td><input type="text" name="title"/></td>
	</tr>
	<tr>
		<td>分类：</td>
		<td>
		<select id="typestr" name="typestr" onchange="getBrand();">
			<?php echo ($typestr); ?>
		</select>
		</td>
	</tr>
	<tr>
		<td>品牌</td>
		<td>
		<select id="brandid" name="brandid">
			<?php if(is_array($bArr)): foreach($bArr as $key=>$v): ?><option value='<?php echo ($v["id"]); ?>'><?php echo ($v["bname"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>
	<tr>
		<td>图片：</td>
		<td><input multiple='multiple' type="file" name="upload[]"/></td>
	</tr>
	<tr>
		<td>价格：</td>
		<td><input type="text" name="price"/></td>
	</tr>
	<tr>
		<td>邮费：</td>
		<td><input type="text" name="express"/></td>
	</tr>
	<tr>
		<td>简介：</td>
		<td><textarea name="content" rows="5" cols="38"></textarea></td>
	</tr>
<!-- 	<tr>
		<td>规格：</td>
		<td><textarea name="style" rows="5" cols="38"></textarea></td>
	</tr> -->
	<tr>
		<td>产品状态：</td>
		<td><input type="radio" name="state" value="9" />热卖
		<input type="radio" name="state" value="6" />流行
		<input type="radio" name="state" value="3" />新上架</td>		
	</tr>		
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>