<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/zj/project/Public/css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
	<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
		<TR height=28>
			<TD background="/zj/project/Public/images/title_bg1.jpg">当前位置:</TD>
		</TR>
		<TR>
			<TD bgColor=#b1ceef height=1></TD>
		</TR>
		<TR height=20>
			<TD background="/zj/project/Public/images/shadow_bg.jpg"></TD>
		</TR>
	</TABLE>
	<TABLE cellSpacing=0 cellPadding=0 width="90%" align=center border=0>
		<TR height=100>
			<TD align=middle width=100><IMG height=100
				src="/zj/project/Public/images/admin_p.gif" width=90></TD>
			<TD width=60>&nbsp;</TD>
			<TD>
				<TABLE height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>

					<TR>
						<TD>当前时间：2008-12-27 17:03:55</TD>
					</TR>
					<TR>
						<TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px">admin</TD>
					</TR>
					<TR>
						<TD>欢迎进入网站管理中心！</TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
		<TR>
			<TD colSpan=3 height=10></TD>
		</TR>
	</TABLE>
	<TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
		<TR height=20>
			<TD></TD>
		</TR>
		<TR height=22>
			<TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff"
				align=middle background=/zj/project/Public/images/title_bg2.jpg>您的相关信息</TD>
		</TR>
		<TR bgColor=#ecf4fc height=12>
			<TD></TD>
		</TR>
		<TR height=20>
			<TD></TD>
		</TR>
	</TABLE>
	<TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
		<TR>
			<TD align=right width=100>用户名：</TD>
			<TD style="COLOR: #880000"><?php echo ($_SESSION['admin']['username']); ?></TD>
		</TR>
		<TR>
			<TD align=right>您的身份：</TD>
			<TD style="COLOR: #880000">admin</TD>
		</TR>
		<TR>
			<TD align=right>注册时间：</TD>
			<TD style="COLOR: #880000">2007-7-25 15:02:04</TD>
		</TR>
	</TABLE>
</BODY>
</HTML>