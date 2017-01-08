<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>New Fashions a Flat Ecommerce Bootstarp Responsive Website Template </title>
<link href="/zj/project/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/zj/project/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/zj/project/public/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>	
<script src="/zj/project/public/js/jquery.easydropdown.js"></script>		
<script src="/zj/project/public/js/jquery.min.js"></script>
<script src="/zj/project/public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/zj/project/public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/zj/project/public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul><li><a href="/zj/project/index.php/User/login">登录</a></li></ul>
				 </div>
			 <div class="logo">
				 <h3><a href="index.html">NEW FASHIONS</a></h3>
			  </div>			  
				<div class="box_1">
					<a href="/zj/project/index.php/Cart/index"><h3>
							购物车: <span class="simpleCart_total"></span> (<span
								id="simpleCart_quantity" class="simpleCart_quantity"></span>宝贝)<img
								src="/zj/project/public/images/cart.png" alt="" />
						</h3></a>
					<p>
						<a href="javascript:;" class="simpleCart_empty">购物车为空</a>
					</p>

				</div>
			 
			 <div class="clearfix"></div>
		 </div>
		 <ul class="megamenu skyblue">
			<li><a href="/zj/project/index.php/Index/index">HOME</a></li>							
<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/zj/project/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>"><?php echo ($v['tname']); ?></a></li><?php endforeach; endif; ?>
				<li<?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="about.html">ABOUT US</a></li>
			    <li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="blog.html">BLOG</a></li>				
				<li><a href="#">SHOP ONLINE</a>				
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">主页</a></li>
		  <li class="active">注册</li>
		 </ol>
		 <h2>注册</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <p>欢迎，请输入以下内容进行注册</p>
				 <p>如果您之前注册过, <a href="#">点击这里</a></p>
				 <form action="/zj/project/index.php/User/add" method="post">
					 <ul>
						 <li class="text-info">用户名: </li>
						 <li><input type="text" name="username" required="required"></li>
					 </ul>
					 <ul>
						 <li class="text-info">密码: </li>
						 <li><input type="password" name="password" required="required"></li>
					 </ul>
					 <ul>
						 <li class="text-info">邮箱: </li>
						 <li><input type="text" name="email" required="required"></li>
					 </ul>					 			 
					 <ul>
						 <li class="text-info">手机号码:</li>
						 <li><input type="text" name="tel" required="required"></li>
					 </ul>						
					 <input type="submit" value="注册">
					 <p class="click">点击此按钮表示您同意本网站相关使用政策，<a href="#">详情参见特定频道的著作权保护声明</a></p> 
				 </form>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>注册前请先仔细阅读下面的会员协议</h3>
			 <p>1.信息的录入 
不得填报任何违反有关法律规定信息； 
不得填报任何不完整、虚假的信息； 
用户填报的内容和提供的证件完全真实有效，如有不实，用户承担由此产生的一切后果和相关责任

2.信息的使用 
本网站提供的其它信息，仅与其相应内容有关的目的而被使用； 
不得将任何本系统的信息用作任何商业目的。 

3.信息的公开 
在本网站所登陆的任何信息，均有可能被任何本网站的访问者浏览，也可能被错误使用。本网站对此将不予承担任何责任。

4.信息的准确性 
任何在本网站发布的信息，均必须符合合法、准确、及时、完整的原则。但本网站将不能保证所有由第三方提供的信息，或本网站自行采集的信息完全准确。使用者了解，对这些信息的使用，需要经过进一步核实。本网站对访问者未经自行核实误用本网站信息造成的任何损失不予承担任何责任。 

5.信息更改与删除 
除了信息的发布者外，任何访问者不得更改或删除他人发布的任何信息。本网站有权根据其判断保留修改或删除任何不适信息之权利。 </p>
		 </div>
		 <div class="clearfix"></div>		 
	 </div>
</div>
<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.moke8.com/">魔客吧</a></p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->	
</body>
</html>