<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/zj/project/Public/css/admin.css" type="text/css" rel="stylesheet">
<SCRIPT language=javascript>
	function expand(el)
	{
		childObj = document.getElementById("child" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
		}
		else
		{
			childObj.style.display = 'none';
		}
		return;
	}
	
	  function logout()
	  {
		  if(confirm("是否退出后台管理系统?"))
		  {		
			window.location = "/zj/project/admin.php/Login/logout";
			   //window.location="/News/index.php";
		  }
	  }
</SCRIPT>
</HEAD>
<BODY>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width=170 
background=/zj/project/Public/images/menu_bg.jpg border=0>
  <TR>
    <TD vAlign=top align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <TR>
          <TD height=10></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/zj/project/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(1) 
            href="javascript:void(0);" target="main">关于我们</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child1 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="#" 
            target=main>公司简介</A></TD></TR>
</TABLE>
          
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/zj/project/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(2) 
             href="javascript:void(0);">分类管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child2 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Type/add" 
            target=main>添加分类</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Type/oper" 
            target=main>修改分类</A></TD></TR>

      
      
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/zj/project/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(3) 
             href="javascript:void(0);">品牌管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child3 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Brand/add" 
            target=main>品牌添加</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Brand/oper" 
            target=main>品牌修改</A></TD></TR>
            </TABLE>
      
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/zj/project/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(4) 
            href="javascript:void(0);">商品管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child4 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Product/add" 
            target=main>商品添加</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Product/oper" 
            target=main>商品修改</A></TD></TR>
        <TR height=4>
          <TD colSpan=2></TD></TR></TABLE>
      
      
      <TABLE cellSpacing=0 cellPadding=0 width=150 border=0>
        
        <TR height=22>
          <TD style="PADDING-LEFT: 30px" background=/zj/project/Public/images/menu_bt.jpg><A 
            class=menuParent onclick=expand(0) 
            href="javascript:void(0);" target="main">账户管理</A></TD></TR>
        <TR height=4>
          <TD></TD></TR></TABLE>
      <TABLE id=child0 style="DISPLAY: none" cellSpacing=0 cellPadding=0 
      width=150 border=0>
        
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            href="/zj/project/admin.php/Login/changge" 
            target=main>修改口令</A></TD></TR>
        <TR height=20>
          <TD align=middle width=30><IMG height=9 
            src="/zj/project/Public/images/menu_icon.gif" width=9></TD>
          <TD><A class=menuChild 
            onclick="logout()" 
            href="/zj/project/admin.php/Login/logout" 
            target=_top>退出系统</A></TD></TR></TABLE></TD>
    <TD width=1 bgColor=#d1e6f7></TD></TR></TABLE></BODY></HTML>