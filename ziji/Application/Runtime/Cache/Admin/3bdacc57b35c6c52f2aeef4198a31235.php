<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/zj/project/Public/css/admin.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/zj/project/Public/js/jquery-1.8.0.js"></script>
<script>
//退出后台
  function logout()
  {
	  if(confirm("是否退出后台管理系统?"))
	  {		
		window.location = "/zj/project/admin.php/Login/logout";
		   //window.location="/News/index.php";
	  }
  }
</script>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" 
background="/zj/project/Public/images/header_bg.jpg" border=0>
  <TR height=56>
    <TD width=260><IMG height=56 src="/zj/project/Public/images/header_left.jpg" 
    width=260></TD>
   <TD style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px" 
      align=middle>当前用户：<?php echo ($_SESSION['admin']['username']); ?> &nbsp;&nbsp; <A style="COLOR: #fff" 
      href="/zj/project/admin.php/Login/changge" 
      target=main>修改口令</A> &nbsp;&nbsp; <A style="COLOR: #fff" 
	  onclick="logout()" 
      href="/zj/project/admin.php/Login/logout" target=_top>退出系统</A> 
    </TD>
    <TD align=right width=268><IMG height=56 
      src="/zj/project/Public/images/header_right.jpg" width=268></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR bgColor=#1c5db6 height=4>
    <TD></TD></TR></TABLE></BODY></HTML>