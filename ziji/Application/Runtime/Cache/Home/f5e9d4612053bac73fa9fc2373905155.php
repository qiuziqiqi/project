<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>新风尚平面电子商务网站</title>
<link href="/myproject/ziji/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/myproject/ziji/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/myproject/ziji/public/css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="/myproject/ziji/public/js/jquery.min.js"></script>
<script src="/myproject/ziji/public/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="/myproject/ziji/public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/myproject/ziji/public/js/megamenu.js"></script>
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
<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <!-- <li><a href="index.html">Home</a></li> -->
		  <li class="active">首页<?php echo ($pArr["typestr"]); ?></li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="/myproject/ziji/public/css/etalage.css">
						<script src="/myproject/ziji/public/js/jquery.etalage.min.js"></script>
					 <!-- Include the Etalage files -->
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						  <ul id="etalage">
						<?php if(is_array($imageArr)): foreach($imageArr as $key=>$v): ?><li>
								<img class="etalage_thumb_image" src="/myproject/ziji/public/images/<?php echo ($v["imagename"]); ?>" />
								<img class="etalage_source_image" src="/myproject/ziji/public/images/<?php echo ($v["imagename"]); ?>" />
							 </li><?php endforeach; endif; ?>
<!-- 							 <li>
								<img class="etalage_thumb_image" src="/myproject/ziji/public/images/s2.jpg" />
								<img class="etalage_source_image" src="/myproject/ziji/public/images/s2.jpg"/>
							 </li>
							 <li>
								<img class="etalage_thumb_image" src="/myproject/ziji/public/images/s3.jpg" />
								<img class="etalage_source_image" src="/myproject/ziji/public/images/s3.jpg" />
							 </li>
							 <li>
								<img class="etalage_thumb_image" src="/myproject/ziji/public/images/s4.jpg" />
								<img class="etalage_source_image" src="/myproject/ziji/public/images/s4.jpg" />
							 </li> -->
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
							<h3><?php echo ($pArr["title"]); ?></h3>						
							<p>$ <?php echo ($pArr["price"]); ?> </p>
							<p class="qty">数量 ::</p><input min="1" type="number" id="shop<?php echo ($pArr["id"]); ?>" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
								<a href="#" onclick="cart(<?php echo ($pArr["id"]); ?>)">加入购物车</a>
							</div>
							<div class="flower-type">
							<p>型号  ::<a href="#"><?php echo ($pArr["id"]); ?></a></p>
							<p>品牌  ::<a href="#"><?php echo ($pArr["bname"]); ?></a></p>
							</div>
							<h5>商品描述  ::</h5>
							<p class="desc"><?php echo ($pArr["content"]); ?></p>
					 </div>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>		 
		 <div class="clearfix"></div>
<!-- 		 <div class="single-bottom2">
			 <h6>Related Products</h6>
				<div class="rltd-posts">
					 <div class="col-md-3 pst1">
						 <img src="/myproject/ziji/public/images/ab3.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="/myproject/ziji/public/images/c1.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="/myproject/ziji/public/images/ab4.jpg" alt=""/>
						 <h4><a href="products.html">SAREES</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="/myproject/ziji/public/images/c5.jpg" alt=""/>
						 <h4><a href="products.html">MANGO</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="clearfix"></div>
				</div>
		 </div>	 -->
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