<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>新风尚平面电子商务网站</title>
<link href="/ziji/public/css/bootstrap.css" rel="stylesheet"
	type="text/css" media="all" />
<link href="/ziji/public/css/style.css" rel="stylesheet"
	type="text/css" media="all" />
<link
	href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css"
	href="/ziji/public/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="/ziji/public/js/jquery.min.js"></script>
<script src="/ziji/public/js/simpleCart.min.js">
	
</script>
<script src="/ziji/public/js/jquery.huax.js"></script>
<!-- start menu -->
<link href="/ziji/public/css/megamenu.css" rel="stylesheet"
	type="text/css" media="all" />
<script type="text/javascript" src="/ziji/public/js/megamenu.js"></script>
<script>
	$(document).ready(function() {
		$(".megamenu").megamenu();
	});
   /* function shop(productid)
    {
  	  //获得购买的数量
  	  var buynum = document.getElementById("shop"+productid).value;
  	  
  	  window.location = "/ziji/index.php/Cart/add/productid/"+productid+"/buynum/"+buynum;
    }*/

  /*  function cart(productid)
    {		
    	//console.log (productid,price,buynum)
    	var buynum = document.getElementById("shop"+productid).value;
    	  //获取购买的数量
    	  $.ajax({
    		  type:"post",
    		  url:"/ziji/index.php/Cart/add",
    		  data:"productid="+productid+"&buynum="+buynum+"",
    		  dataType:"json",
    		  success:function(msg){
    			  var totalPrice = msg.totalPrice;
    			  var total = msg.total;
    			  $("#cartprice").html(totalPrice);
    			  $("#carttotal").html(total);   			  	
    		  }
    	  }); 
    }*/
</script>
<!-- start menu -->
</head>
<body>
	<!--header-->
	<script>
function cart(productid)
{		
	//console.log (productid,price,buynum)
	var buynum = document.getElementById("shop"+productid).value;
	  //获取购买的数量
	  $.ajax({
		  type:"post",
		  url:"/ziji/index.php/Cart/add",
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
		  window.location = "/ziji/index.php/User/logout";
	  }
}
</script>
	<div class="header">
		<div class="container">
			<div class="main-header">
				<div class="carting">
					<ul>
						<li>
						<?php if($_SESSION['user']== NULL): ?><a href="/ziji/index.php/User/login">登录</a> | 
					    <?php else: ?>
					    <a href="#" onclick="logout()">退出</a><?php endif; ?>
    					</li>
					</ul>
				</div>
				<div class="logo">
					<h3>
						<a href="index.html">NEW FASHION</a>
					</h3>
				</div>
				<div class="box_1">
					<a href="/ziji/index.php/Cart/index"><h3>
							购物车: <span id="cartprice">共<?php echo ($totalPrice); ?>元</span>(<span id="carttotal"><?php echo ($total); ?></span>件宝贝)<img
								src="/ziji/public/images/cart.png" alt="" />
						</h3></a>
<!-- 					<p>
						<a href="javascript:;" class="simpleCart_empty">购物车为空</a>
					</p> -->

				</div>

				<div class="clearfix"></div>
			</div>

			<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid "><a class="color1" href="/ziji/index.php/Index/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/ziji/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v['tname']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><?php endforeach; endif; ?>

				<li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="/ziji/index.php/public/about/tid/-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>							
				<li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/ziji/index.php/Index/shop/tid/-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多推荐&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>	
				</li>			
				
				</ul> 	

				
			<div class="clearfix"></div>
		</div>
		<div class="caption">
			<h1>时尚创意</h1>
			<p>时尚品牌创意本质上是对目标顾客需求（生活方式或生产方式）和企业解决方案的抽象的、高度概括的概念性描述，是以一种简洁的、具有强烈的视觉听觉冲击力的表现形式向目标顾客展示品牌所代表的生活方式或生产方式。</p>
		</div>
	</div>
	<!--header-->
	<div class="categoires">
		<div class="container">
			<a href="javascript:void(0);"><div class="col-md-4 sections fashion-grid-a">
					<h4>时尚</h4>
					<p>dignissim</p>
				</div></a> <a href="javascript:void(0);"><div class="col-md-4 sections fashion-grid-b">
					<h4>美感</h4>
					<p>fermentum</p>
				</div></a> <a href="javascript:void(0);"><div class="col-md-4 sections fashion-grid-c">
					<h4>创新</h4>
					<p>vulputate</p>
				</div></a>
		</div>
	</div>
<!---->
<div class="features" id="features">
	 <div class="container">
		 <div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">热卖</a></li>
				<li><a href="#tab2">流行</a></li>
				<li><a href="#tab3">新上架</a></li>
			</ul>
			<div class="clearfix"> </div>
		 <div class="tab-grids">
		  <?php if(is_array($arr)): foreach($arr as $k=>$v): ?><div id="tab<?php echo ($k+1); ?>" class="tab-grid<?php echo ($k+1); ?>">
 			 <?php if(is_array($v)): foreach($v as $kk=>$vv): ?><a href="/ziji/index.php/Product/detail/id/<?php echo ($vv["id"]); ?>"><div class="product-grid">				
						<div class="more-product-info"><span>						
						<?php if($vv["state"] == 9): ?>HOT
						<?php elseif($vv["state"] == 3): ?>NEW
						<?php elseif($vv["state"] == 6): ?>RAGE<?php endif; ?>												
						</span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">						   
							<img src="/ziji/public/images/<?php echo ($vv["imagename"]); ?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">商品详情</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4><?php echo ($vv["title"]); ?></h4>
								<span class="item_price">￥<?php echo ($vv["price"]); ?></span>																
								<input type="text" class="item_quantity" id="shop<?php echo ($vv["id"]); ?>" value="1" />								
								<input type="button" class="item_add" value="加入购物车" onclick="cart(<?php echo ($vv["id"]); ?>)">								
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div><?php endforeach; endif; ?>	 										
					<div class="clearfix"></div>
			 </div><?php endforeach; endif; ?>	
			<!--  <div id="tab2" class="tab-grid2">
				 <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/c1.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>NEWLOOK</h4>
								<span class="item_price">$187.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>										
					<div class="clearfix"></div>
			 </div>
		 
			 <div id="tab3" class="tab-grid3">
				  <a href="single.html"><div class="product-grid">
						<div class="more-product-info"></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/bs3.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">ORDER NOW</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4>ROADSTER</h4>
								<span class="item_price">$160.95</span>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add" value="ADD">	
							</div>													
							<div class="clearfix"> </div>
						</div>
					 </div>							 			
				   <div class="clearfix"></div>					
			 </div>-->
		 </div>				
		 </div>
				<!-- tabs-box -->
				<!-- Comman-js-files -->
				<script>
					$(document)
							.ready(
									function() {
										$("#tab2").hide();
										$("#tab3").hide();
										$(".tabs-menu a")
												.click(
														function(event) {
															event
																	.preventDefault();
															var tab = $(this)
																	.attr(
																			"href");
															$(
																	".tab-grid1,.tab-grid2,.tab-grid3")
																	.not(tab)
																	.css(
																			"display",
																			"none");
															$(tab).fadeIn(
																	"slow");
														});
										$("ul.tabs-menu li a")
												.click(
														function() {
															$(this)
																	.parent()
																	.addClass(
																			"active a");
															$(this)
																	.parent()
																	.siblings()
																	.removeClass(
																			"active a");
														});
									});
				</script>
				<!-- Comman-js-files -->
			</div>
		</div>
		<!--fotter-->
		<div class="fotter">
			<div class="container">
				<div class="col-md-6 contact">
					<form action="/ziji/index.php/User/check" method="post">
						<input type="text" class="text" value="Name..."
							onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = '用户名...';}">
						<input type="text" class="text" value="Email..."
							onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = '密码...';}">
						<!-- <textarea onfocus="if(this.value == 'Message...') this.value='';"
							onblur="if(this.value == '') this.value='Message...';">Message...</textarea> -->
						<div class="clearfix"></div>
						<input type="submit" value="SUBMIT">
					</form>

				</div>
				<div class="col-md-6 ftr-left">
					<div class="ftr-list">
						<ul>
							<li><a href="#">主页</a></li>
							<li><a href="/ziji/index.php/public/about/tid/-1">关于我们</a></li>							
							<li><a href="/ziji/index.php/Index/shop/tid/-2">推荐</a></li>
							<li><a href="/ziji/index.php/Product/lister/tid/1">男人</a></li>
							<li><a href="/ziji/index.php/Product/lister/tid/2">女人</a></li>
						</ul>
					</div>
					<div class="ftr-list2">
						<ul>
						</ul>
					</div>
					<div class="clearfix"></div>
					<h4>FOLLOW US</h4>
					<div class="social-icons">
						<a href="#"><span class="in"> </span></a> <a href="#"><span
							class="you"> </span></a> <a href="#"><span class="be"> </span></a> <a
							href="#"><span class="twt"> </span></a> <a href="#"><span
							class="fb"> </span></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--fotter//-->
				<div class="fotter-logo">
			<div class="container">
				<div class="ftr-logo">
					<h3>
						<a href="/ziji/index.php/index"><b>新风尚</b></a>
					</h3>
				</div>
				<div class="ftr-info">
					<p>
						Copyright &copy; 2016企业名称保留所有权利.<a
							target="_blank" href="http://www.moke8.com/">版权联系</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		
		<!--fotter//-->
</body>
</html>