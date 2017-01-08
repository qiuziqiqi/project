<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
	function _initialize($productid=0,$buynum=0){
	    $headerType=M('Type');
	    $headerTypeArr=$headerType->where("fid=0 and state=1")->select();
	    $this->assign('headerTypeArr',$headerTypeArr);
	    if(isset($_GET['tid'])){
	        $this->assign('headerTid',$_GET['tid']);
	    }else{
	        $this->assign('headerTid',0);
	    }

	    $totalPrice = 0;//所有商品总价
	    $total = 0;//商品总数	    	    
	    //获取购物车中购买数量
	    if(isset($_COOKIE['cart'])){
	        //获取cookie中的信息
	        $arr=unserialize($_COOKIE['cart']);
	        $product=M('Product');
	        foreach ($arr  as $k=>$v)
	        {
	            $productArr=$product->field("price")->where("id=$k")->find();
	            $a = $productArr['price'] * $v;
	            $totalPrice += $a;
	            $total += $v;
	        }
	    }      
	    $this->assign('totalPrice',$totalPrice);
	    $this->assign('total',$total);
	        	        
	}
}