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
$(function(){
	$("#typestr").val('<?php echo ($pArr["typestr"]); ?>');
	$("#brandid").val('<?php echo ($pArr["brandid"]); ?>');
})
function delImage(imageid,imagename){
	//根据id，删除图片记录，根据图片名称，删除图片
	$.ajax({
		url:'/zj/project/admin.php/Product/delimage',
		data:{'id':imageid,'iname':imagename},
		success:function(re){
			if(re==1){
				$("#tr_"+imageid).remove();
			}else{
				alert("删除失败");
			}
		}
	})
}
</script>
</head>
<body>
<div>当前操作：修改产品</div>
<form action="/zj/project/admin.php/Product/usave" method="post" enctype="multipart/form-data">
<table width="100%">
	<tr>
		<td>标题：</td>
		<td><input value="<?php echo ($pArr["title"]); ?>" type="text" name="title"/></td>
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
		<td>
		<table>
			<?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><tr id="tr_<?php echo ($v["id"]); ?>">
				<td><img height='100' src='/zj/project/Public/images/<?php echo ($v["imagename"]); ?>'/></td>
				<td><a href="javascript:delImage(<?php echo ($v["id"]); ?>,'<?php echo ($v["imagename"]); ?>');">删除</a></td>
			</tr><?php endforeach; endif; ?>
		</table>	
		<input multiple='multiple' type="file" name="upload[]"/></td>
	</tr>
	<tr>
		<td>市场价格：</td>
		<td><input value="<?php echo ($pArr["price"]); ?>" type="text" name="price"/></td>
	</tr>
	<tr>
		<td>简介：</td>
		<td><textarea name="content" rows="5" cols="38"><?php echo ($pArr["content"]); ?></textarea></td>
	</tr>
	<tr>
		<td>规格：</td>
		<td><input value="<?php echo ($pArr["state"]); ?>" type="text" name="state"/></td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="hidden" name="id" value="<?php echo ($pArr["id"]); ?>"/>
		<input type='hidden' name="surl" value="<?php echo ($_SERVER['HTTP_REFERER']); ?>"/>
		<input type="submit" value="修改"/></td>
	</tr>
</table>
</form>
</body>
</html>