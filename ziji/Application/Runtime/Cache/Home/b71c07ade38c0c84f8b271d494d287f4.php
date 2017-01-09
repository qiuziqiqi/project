<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>新风尚平面电子商务网站</title>
<link href="/myproject/ziji/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/myproject/ziji/public/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="/myproject/ziji/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="/myproject/ziji/public/js/jquery.min.js"></script>
<script src="/myproject/ziji/Public/js/jquery-1.8.0.js" ></script> 
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/myproject/ziji/public/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="/myproject/ziji/public/js/jquery.easydropdown.js"></script>
<script src="/myproject/ziji/public/js/jquery.min.js"></script>
<script src="/myproject/ziji/public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/myproject/ziji/public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/myproject/ziji/public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script>
function getBrand(id){
	//启动ajax，去获取一级分类下的品牌
	$.ajax({
		url:'/myproject/ziji/index.php/Product/getbrand',
		data:{'id':id},//firstid=id&a=6
		success:function(re){
			
			//alert(re);
			var myobj=eval(re);  
			//alert(myobj)
/* 			var a = myobj.length;
			var k = 6;
			if(k > a){
				$("#div"+k).hide();
			} */
 			 for(var i=0;i<myobj.length;i++){ 
 				//($("#a"+i).attr("href",""/myproject/ziji/index.php/Product/detail/id/"+myobj[i].id"));				 
				($("#price"+i).html("￥"+myobj[i].price));
				($("#image"+i).attr("src","/myproject/ziji/public/images/"+myobj[i].imagename));
				($("#title"+i).html(myobj[i].title));
				}   

		}
	})
}
</script>	  
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
		  url:"/myproject/ziji/index.php/Cart/add",
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
		  window.location = "/myproject/ziji/index.php/User/logout";
	  }
}
</script>
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul>
						<li>
						<?php if($_SESSION['user']== NULL): ?><h3><a href="/myproject/ziji/index.php/User/login">登录</a></h3>  
					    <?php else: ?>
					    <h3><a href="#" onclick="logout()">退出</a></h3><?php endif; ?>
    					</li>
				</ul>
				 </div>
			 <div class="logo">
				 <h3><a href="/myproject/ziji/index.php/Index">NEW FASHIONS</a></h3>
			  </div>			  
				<div class="box_1">
					<a href="/myproject/ziji/index.php/Cart/index"><h3>
							购物车: <span id="cartprice">共<?php echo ($totalPrice); ?>元</span>(<span id="carttotal"><?php echo ($total); ?></span>件宝贝)<img
								src="/myproject/ziji/public/images/cart.png" alt="" />
						</h3></a>

				</div>
			 
			 <div class="clearfix"></div>
		 </div>
		 <ul class="megamenu skyblue">
			<li><a href="/myproject/ziji/index.php/Index/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>							
<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/myproject/ziji/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v['tname']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><?php endforeach; endif; ?>
				<li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="/myproject/ziji/index.php/public/about/tid/-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>			
				<!-- <li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/myproject/ziji/index.php/public/about/tid/-2">&nbsp;联系我们&nbsp;</a> -->
				<li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/myproject/ziji/index.php/Index/shop/tid/-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多推荐&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>					
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->
<div class="product-model">	 
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">主页</a></li>
		  <li class="active"><?php echo ($tname["tname"]); ?></li>
		 </ol>
			<h2>OUR PRODUCTS</h2>			
		 <div class="col-md-9 product-model-sec">
		 
		 		<?php if(is_array($arr)): foreach($arr as $k=>$v): ?><!-- <div id="div<?php echo ($k); ?>" class="getnum">-->			  	
					<a id="a<?php echo ($k+1); ?>" href="/myproject/ziji/index.php/Product/detail/id/<?php echo ($v["id"]); ?>"><div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img id="image<?php echo ($k); ?>" src="/myproject/ziji/public/images/<?php echo ($v["imagename"]); ?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns">现在订购</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<h4 id="title<?php echo ($k); ?>"><?php echo ($v["title"]); ?></h4>
								<span id="price<?php echo ($k); ?>" class="item_price">￥<?php echo ($v["price"]); ?></span>
								<input type="text" class="item_quantity" id="shop<?php echo ($v["id"]); ?>" value="1" />
								<input type="button" class="item_add items" value="加入购物车" onclick="cart(<?php echo ($v["id"]); ?>)">
							</div>											
							<div class="clearfix"> </div>
						</div>
						<!-- </div>	 -->																																					
					</div><?php endforeach; endif; ?>
					
					 										
			</div>
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h3 class="m_2">分类</h3>
						  <?php if(is_array($larr)): foreach($larr as $k=>$v): ?><div class="tab<?php echo ($k+1); ?>">
							 <ul class="place">								
								 <li class="sort"><a href="/myproject/ziji/index.php/Product/lister/tid/<?php echo ($v["fid"]); ?>/tstr/<?php echo ($v["fid"]); ?>><?php echo ($v["id"]); ?>"><?php echo ($v["tname"]); ?></a></li>
								 
									<div class="clearfix"> </div>
							  </ul>
					      </div><?php endforeach; endif; ?>						  
						  						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->	
			 
				 </section>
				 <section  class="sky-form">
						<h4>品牌</h4>
							<?php if(is_array($lbarr)): foreach($lbarr as $k=>$v): ?><ul class="place">							
								 <li class="sort"><a href="javascript:getBrand(<?php echo ($v["id"]); ?>)"><?php echo ($v["bname"]); ?></a></li>
									<div class="clearfix"> </div>
							  </ul><?php endforeach; endif; ?>
				   </section>		             
			 </div>			 
			 <div class="clearfix"></div>
				<center><?php echo ($pageStr); ?></center>
		</div>
</div>	

<!--fotter-->
		<div class="fotter-logo">
			<div class="container">
				<div class="ftr-logo">
					<h3>
						<a href="/myproject/ziji/index.php/index"><b>新风尚</b></a>
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