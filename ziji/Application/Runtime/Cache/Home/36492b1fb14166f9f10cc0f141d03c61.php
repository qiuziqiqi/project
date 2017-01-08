<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>New Fashions a Flat Ecommerce Bootstarp Responsive Website Template </title>
<link href="/project/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/project/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/project/public/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>		
<script src="/project/public/js/jquery.min.js"></script>
<script src="/project/public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/project/public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/project/public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<script type="text/javascript">
function cart(productid)
{		
	//console.log (productid,price,buynum)
	var buynum = document.getElementById("shop"+productid).value;
	  //获取购买的数量
	  $.ajax({
		  type:"post",
		  url:"/project/index.php/Cart/add",
		  data:"productid="+productid+"&buynum="+buynum+"",
		  dataType:"json",
		  success:function(msg){
			  var totalPrice = msg.totalPrice;
			  var total = msg.total;
			  $("#cartprice").html(totalPrice);
			  $("#carttotal").html(total);   			  	
		  }
	  }); 
}
function logout()
{
	  if(confirm("是否退出登陆？")){
		  window.location = "/project/index.php/User/logout";
	  }
}
</script>
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul>
						<li>
						<?php if($_SESSION['user']== NULL): ?><a href="/project/index.php/User/login">登录</a> | 
					    <?php else: ?>
					    <a href="#" onclick="logout()">退出</a><?php endif; ?>
    					</li>
				</ul>
				 </div>
			 <div class="logo">
				 <h3><a href="index.html">NEW FASHIONS</a></h3>
			  </div>			  
				<div class="box_1">
					<a href="/project/index.php/Cart/index"><h3>
							购物车: <span id="cartprice">共<?php echo ($totalPrice); ?>元</span>(<span id="carttotal"><?php echo ($total); ?></span>件宝贝)<img
								src="/project/public/images/cart.png" alt="" />
						</h3></a>

				</div>
			 
			 <div class="clearfix"></div>
		 </div>
		 <ul class="megamenu skyblue">
			<li><a href="/project/index.php/Index/index">HOME</a></li>							
<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/project/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>"><?php echo ($v['tname']); ?></a></li><?php endforeach; endif; ?>
				<li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="/project/index.php/public/about/tid/-1">ABOUT US</a></li>			
				<li><a href="#">SHOP ONLINE</a>
				<li><a href="#">SHOP</a>					
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>

<!--header//-->
<div class="login">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="/project/index.php/Index/index">主页</a></li>
		  <li class="active">登录</li>
		 </ol>
		 <h2>登录</h2>
		 <div class="col-md-6 log">		 
				 <p>欢迎，请输入以下继续。</p>
				 <form action="/project/index.php/User/check" method="post">
					 <h5>用户名 :</h5>	
					 <input type="text" name="username" required="required">
					 <h5>密码 :</h5>
					 <input type="password" name="password" required="required">
					 <h5>验证码 :</h5>			 
 					 <input type="text" name="checkCode" required="required"><img id="myImg" onclick="javascript:this.src='/project/index.php/User/code/ran/'+Math.random();"  src="/project/index.php/User/code" align="absmiddle">					
					 <input type="hidden" name="s" value="<?php echo ($_GET['s']); ?>" />
					 <input type="submit" value="登录">
<!-- 忘记密码功能 					  <a href="#">Forgot Password ?</a> -->
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>注册新用户</h3>
				<p>创建一个账户可以使您体验更快捷的结算过程，并能自定义多个送货地址，查看和跟踪您的订单以及享受更多其他服务。</p>
				<a class="acount-btn" href="/project/index.php/User/reg">注册</a>
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