<?php
namespace Home\Controller;
class CartController extends BaseController{
	function add($productid,$buynum){
// 		接收两个值
// 		将购物信息写入cookie
		if(isset($_COOKIE['cart'])){
			$arr=unserialize($_COOKIE['cart']);
			if(isset($arr[$productid])){
				$arr[$productid]+=$buynum;
			}else{
				$arr[$productid]=$buynum;
			}
		}else{
			$arr=array($productid=>$buynum);
		}	
		setcookie("cart",serialize($arr),time()+30*24*3600,'/');


        //为右上角购物车查询 数量和总价
		$totalPrice = 0;//所有商品总价		
		$product=M('Product');
		foreach ($arr  as $k=>$v)
		{
		    $productArr=$product->field("price")->where("id=$k")->find();
		    $a = $productArr['price'] * $v;
		    $totalPrice += $a;
		    $total += $v;
		}
		//返回响应的结果：totalPrice、price
		$arr = array(
		    "totalPrice"=>$totalPrice,
		    "total"=>$total
		);
		$json = json_encode($arr);
		echo $json;

		//回传json字符串;
		
	}
	
	/*function proadd($productid,$buynum){
	    // 		接收两个值
	    // 		将购物信息写入cookie
	    if(isset($_COOKIE['cart'])){
	        $arr=unserialize($_COOKIE['cart']);
	        if(isset($arr[$productid])){
	            $arr[$productid]+=$buynum;
	        }else{
	            $arr[$productid]=$buynum;
	        }
	    }else{
	        $arr=array($productid=>$buynum);
	    }
	    setcookie("cart",serialize($arr),time()+30*24*3600,'/');
	    
	    header("location:".U('Cart/index'));
	}*/
	function index(){
	    if(!isset($_SESSION['user'])){
	        $this->error("请登录后操作",U("User/login",array('s'=>1)));//如果是1，调回到订单页面
	        exit();
	    }
		//展现购物车首页页面
		$allmoney=0;
		$allexpress=0;
		if(isset($_COOKIE['cart'])){
			//获取cookie中信息
			$cartArr=unserialize($_COOKIE['cart']);
			//遍历cookie,生成一个数组
			$product=M('Product');
			$productimage=M("Productimage");
			$arr=array();
			
			foreach($cartArr as $k=>$v){
				//根据商品的id，获取产品信息
				$productArr=$product->where("id=$k")->find();
				//根据商品id，获取商品的图片一个
				$imageArr=$productimage->where("productid=$k")->find();
				//$Price = $productArr['price'];//$v<$productArr['salenum'] ? $productArr['userprice'] : $productArr['saleprice'];
				//拼数组
				$arr[]=array('id'=>$k,'imagename'=>$imageArr['imagename'],'title'=>$productArr['title'],'buynum'=>$v,'price'=>$productArr['price'],'express'=>$productArr['express'],'money'=>$productArr['price']*$v);
				$allmoney+=$v*$productArr['price'];
				$allexpress+=$productArr['express'];
			}
			$this->assign('arr',$arr);
		}
		//var_dump($arr);
		$this->assign('allexpress',$allexpress);
		$this->assign('allmoney',$allmoney);
		$this->display();
	}
	function clear(){
		setcookie('cart','',time()-1,'/');
		header("location:".U('Cart/index'));
	}
	function del($productid){
		//获取产品id
		//获取cookie值，反序列化
		$cartArr=unserialize($_COOKIE['cart']);
		//根据产品id，删除对应的元素
		unset($cartArr[$productid]);
		//把数组写入到cookie
		setcookie("cart",serialize($cartArr),time()+30*24*3600,'/');
		header("location:".U('Cart/index'));
	}
	
	/*function update(){
		setcookie("cart",serialize($_POST['buynum']),time()+30*24*3600,'/');
		header("location:".U('Cart/index'));
	}*/
	
	//购物车页面根据文本修改获得总价格
	 function update($productid,$price,$buynum)
	{
	    //获得ajax提交的数据
	    //修改数量
	    $cartArr=unserialize($_COOKIE['cart']);
	    $cartArr[$productid]=$buynum;
	    setcookie("cart",serialize($cartArr),time()+30*24*3600,'/');
	    //求所有商品总价、该商品总价
	    $totalPrice = 0;//所有商品总价
	    $price = $cartArr[$productid]*$price;//该商品总价
	    $product=M('Product');
	    foreach ($cartArr  as $k=>$v)
	    {  
	        $productArr=$product->field("price")->where("id=$k")->find();
	        $a = $productArr['price'] * $v;
	        $totalPrice += $a;
	    }
	     //var_dump($cartArr); 
	    //返回响应的结果：totalPrice、price
	    $arr = array(
	        "totalPrice"=>$totalPrice,
	        "price"=>$price
	    );
	    $json = json_encode($arr);
	     echo $json; 
	}
	
	/*function indexadd($productid,$buynum){
// 		接收两个值
// 		写cookie
		if(isset($_COOKIE['cart'])){
			$arr=unserialize($_COOKIE['cart']);
			if(isset($arr[$productid])){
				$arr[$productid]+=$buynum;
			}else{
				$arr[$productid]=$buynum;
			}
		}else{
			$arr=array($productid=>$buynum);
		}		

		setcookie("cart",serialize($arr),time()+30*24*3600,'/');
		
		$totalPrice = 0;//所有商品总价
		//$price = $arr[$productid]*$price;//该商品总价
		$product=M('Product');
		foreach ($arr  as $k=>$v)
		{
		    $productArr=$product->field("price")->where("id=$k")->find();
		    $a = $productArr['price'] * $v;
		    $totalPrice += $a;
		    $total += $v;
		}
		//var_dump($cartArr);
		//返回响应的结果：totalPrice、price
		$arr = array(
		    "totalPrice"=>$totalPrice,
		    "total"=>$total
		);
		$json = json_encode($arr);
		echo $json;


	}*/
	
	
}