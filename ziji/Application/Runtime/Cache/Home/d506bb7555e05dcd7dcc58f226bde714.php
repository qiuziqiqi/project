<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>新风尚平面电子商务网站</title>
<link href="/project/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/project/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/project/public/css/component.css" />
<script src="/project/Public/js/jquery-1.8.0.js" ></script> 
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
				 <h3><a href="/project/index.php/Index">新风尚</a></h3>
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
			<li><a href="/project/index.php/Index/index">主页</a></li>							
<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/project/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>">&nbsp;&nbsp;<?php echo ($v['tname']); ?>&nbsp;&nbsp;</a></li><?php endforeach; endif; ?>
				<li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="/project/index.php/public/about/tid/-1">&nbsp;&nbsp;关于我们&nbsp;&nbsp;</a></li>			
				<li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/project/index.php/public/about/tid/-2">&nbsp;&nbsp;联系我们&nbsp;&nbsp;</a>
				<li <?php if($headerTid == -3): ?>class='active'<?php endif; ?> ><a href="/project/index.php/public/about/tid/-3">&nbsp;&nbsp;更多推荐&nbsp;&nbsp;</a>					
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->
<div class="cart">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="/project/index.php/Index">主页</a></li>
		  <li class="active">购物车</li>
		 </ol>
		 <div class="cart-top">
			<a href="index.html"><< 返回主页</a>
		 </div>	
			
		 <div class="col-md-9 cart-items">
			 <h2>我的购物车 (2)</h2>
				<script>
			/*	function cli(k){
				$(function(){
					$(".cli"+k).click(function(){
						$(".cart-header"+k).fadeOut("slow",function(){
							$('.cart-header'+k).remove();
						});
					});

				});
				 window.location = "/project/index.php/Cart/del/productid/"+productid;
			} */

			      //删除单个商品
			      function del(productid)
			      {
			    	  window.location = "/project/index.php/Cart/del/productid/"+productid;
			      }
				  function clear()
				  {
					  if(confirm("是否清空购物车?"))
					  {		
						window.location = "/project/index.php/Cart/clear";						   
					  }
				  }
			// //利用ajax修改产品数量计算价格
		      function changebuynum(productid,price,buynum,allexpress)
		      {		
				console.log (productid,price,buynum)
				
		    	  //获取购买的数量
		    	  $.ajax({
		    		  type:"post",
		    		  url:"/project/index.php/Cart/update",
		    		  data:"productid="+productid+"&price="+price+"&buynum="+buynum+"",
		    		  dataType:"json",
		    		  success:function(msg){
 		    			  var totalPrice = msg.totalPrice;
		    			  var price = msg.price;
		    			  $("#totalSpan").html(totalPrice);
		    			  $("#price"+productid).html(price); 
		    			  $("#allprice").html(allexpress+totalPrice);	
		    		  }
		    	  }); 
		      }
			   </script>
			  <?php if(is_array($arr)): foreach($arr as $k=>$v): ?><div class="cart-header">
				 <div class="close"  onclick="del(<?php echo ($v["id"]); ?>)"> </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="/project/public/images/<?php echo ($v["imagename"]); ?>"/>
						</div>
					   <div class="cart-item-info">
							 <h3><?php echo ($v["title"]); ?><span>Model No: <?php echo ($v["id"]); ?></span></h3>
							 <h4 > 商品总价：<span id="price<?php echo ($v["id"]); ?>"><?php echo ($v["money"]); ?></span></h4>
							 <p class="qty">数量 ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="<?php echo ($v["buynum"]); ?>" onblur="changebuynum(<?php echo ($v["id"]); ?>,<?php echo ($v["price"]); ?>,this.value,<?php echo ($allexpress); ?>)" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>快递费 ：<?php echo ($v["express"]); ?></p>
							 <span>预计 2-3工作日内到达</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			 </div><?php endforeach; endif; ?>				
		 </div>
		 
		 <div class="col-md-3 cart-total">
			 <!-- <a class="continue" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>">继续购物</a> -->
			  <a class="continue" href="/project/index.php/Index/index">继续购物</a>
			 <a class="continue" href="javascript:clear();">清空购物车</a>
			 <div class="price-details">
				 <h3>订单</h3>
				 <span>商品合计</span>
				 <span class="total" id="totalSpan"><?php echo ($allmoney); ?>元</span>
				 <span>邮费合计</span>
				 <span class="total"><?php echo ($allexpress); ?>元</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">需付款</h4>
			 <span class="total final" id="allprice"><?php echo ($allmoney+$allexpress); ?>元</span>
			 <div class="clearfix"></div>
			 <a class="order" href="#">结账</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
<!--fotter-->
		<div class="fotter-logo">
			<div class="container">
				<div class="ftr-logo">
					<h3>
						<a href="/project/index.php/index"><b>新风尚</b></a>
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