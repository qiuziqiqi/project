<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script src="/zj/project/Public/js/jquery-1.8.0.js" type="text/javascript" language="javascript"></script> 
<title>无标题文档</title> 
<script type="text/javascript"> 
$(function(){ 
$(":checkbox").click(function(){ 
if($(this).attr("checked")) 
{ 
$(this).siblings().attr("checked",false); 
$(this).attr("checked",true); 
} 
});

}); 
function fun(){
    obj = document.getElementsByName("checkbox");
    for(k in obj){
        if(obj[k].checked)
        	alert(obj[k].value);
    }
   
}
</script> 
<style> 
span,input{float:left;} 
input{ width:14px; height:14px;} 
span{ margin-right:20px;} 
</style> 
</head> 

<body> 
<div> 
<input type="checkbox" name="checkbox" value="1"/ onclick="fun();"><span>1</span> 
<input type="checkbox" name="checkbox" value="2" onclick="fun();"/><span>2</span> 
<input type="checkbox" /><span>3</span> 
<input type="checkbox" /><span>4</span> 
<input type="checkbox" /><span>5</span> 
<input type="checkbox" /><span>6</span> 
<input type="text" /><span>7</span> 
</div> 
</body> 
</html>