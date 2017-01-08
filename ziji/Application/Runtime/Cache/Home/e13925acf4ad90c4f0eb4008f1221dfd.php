<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>New Fashions a Flat Ecommerce Bootstarp Responsive Website Templat</title>
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
<script type="text/javascript">
function cart(productid)
{		
	//console.log (productid,price,buynum)
	var buynum = document.getElementById("shop"+productid).value;
	  //获取购买的数量
	  $.ajax({
		  type:"post",
		  url:"/zj/project/index.php/Cart/add",
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
		  window.location = "/zj/project/index.php/User/logout";
	  }
}
</script>
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul>
						<li>
						<?php if($_SESSION['user']== NULL): ?><h3><a href="/zj/project/index.php/User/login">登录</a></h3>  
					    <?php else: ?>
					    <h3><a href="#" onclick="logout()">退出</a></h3><?php endif; ?>
    					</li>
				</ul>
				 </div>
			 <div class="logo">
				 <h3><a href="/zj/project/index.php/Index">NEW FASHIONS</a></h3>
			  </div>			  
				<div class="box_1">
					<a href="/zj/project/index.php/Cart/index"><h3>
							购物车: <span id="cartprice">共<?php echo ($totalPrice); ?>元</span>(<span id="carttotal"><?php echo ($total); ?></span>件宝贝)<img
								src="/zj/project/public/images/cart.png" alt="" />
						</h3></a>

				</div>
			 
			 <div class="clearfix"></div>
		 </div>
		 <ul class="megamenu skyblue">
			<li><a href="/zj/project/index.php/Index/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>							
<?php if(is_array($headerTypeArr)): foreach($headerTypeArr as $key=>$v): ?><li <?php if($headerTid == $v['id']): ?>class='active'<?php endif; ?> ><a  href="/zj/project/index.php/Product/lister/tid/<?php echo ($v["id"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v['tname']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><?php endforeach; endif; ?>
				<li <?php if($headerTid == -1): ?>class='active'<?php endif; ?> ><a href="/zj/project/index.php/public/about/tid/-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于我们&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>			
				<!-- <li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/zj/project/index.php/public/about/tid/-2">&nbsp;联系我们&nbsp;</a> -->
				<li <?php if($headerTid == -2): ?>class='active'<?php endif; ?> ><a href="/zj/project/index.php/Index/shop/tid/-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多推荐&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>					
				</li>			
				
				</ul>			
			  <div class="clearfix"></div> 
	 </div>
</div>
<!--header//-->
<div class="about">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">主页</a></li>
		  <li class="active">关于我们</li>
		 </ol>
		 <h2>关于我们</h2>
		 <div class="about-sec">
			 <div class="about-pic"><img src="/zj/project/public/images/a1.jpg" class="img-responsive" alt=""/></div>
			 <div class="about-info">
				 <p>新风尚洋溢着现代浪漫以及欧陆情怀服装广告文案的中高端时装品牌，以优雅设计及简约线条见称，不论时常衣着或晚装都极易配衬，是追求潮流及时尚人士的心仪之选。
在这个崇尚个性时尚的时代，新风尚公司特别推出高级量身订制业务，让您感受现代立体裁剪的贴身之美。</p>
<p>品牌风格：秉乘东方神秘优雅展现欧洲时尚风情，注重搭配，讲究品位，工艺精致，用料上乘，时尚而优雅，有品位而不张扬。</p>
<!-- <p>新风尚的品牌宗旨是：让心情愉悦！让梦想飞扬！</p> -->
<p>设计师团队：新风尚高级设计师团队以独特新潮的目光，紧随流行时尚，锻造经典之美。<!-- 设计师团队总部设于香港这座世纪时尚都市。我们站在巴黎的艾菲尔铁塔下，信步走 在米兰的蒙特拿破仑大道上感受国际时尚之风，到梦幻般的香格里拉寻找大自然赋予的天地美，去遥远的阿尔卑斯山感受纯净之美……最终我们会将这些美化为霓裳。 -->
</p>
<p>
联系方式
　　<p>地址:北京亦庄经济技术开发区东区25号蓝天工业园</p>
　　<p>电话: 010- 87397706</p>
				 <a href="blog-single.html">更多..</a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<!--  <h3>OUR SPECIALS</h3> -->
		 <div class="about-grids">
<!-- 			 <div class="col-md-3 about-grid">
				 <img src="/zj/project/public/images/ab1.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Kurtis & Kurtas</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid">
				 <img src="/zj/project/public/images/ab2.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Salwars</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-2">
				 <img src="/zj/project/public/images/ab3.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Desi Look</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-1">
				 <img src="/zj/project/public/images/ab4.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Designersaree</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="clearfix"></div>
			 <div class="bottom-grids">
			 <div class="col-md-3 about-grid flwr">
				 <img src="/zj/project/public/images/ab5.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>NEWLOOK</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr">
				 <img src="/zj/project/public/images/ab6.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Meriea</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-2">
				 <img src="/zj/project/public/images/ab7.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Woolen Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-1">
				 <img src="/zj/project/public/images/ab8.jpg" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Black Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div> -->
			 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
</div>

<!--fotter-->
		<div class="fotter-logo">
			<div class="container">
				<div class="ftr-logo">
					<h3>
						<a href="/zj/project/index.php/index"><b>新风尚</b></a>
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