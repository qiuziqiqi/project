<?php
namespace Home\Controller;
class ProductController extends BaseController{
	function lister(){
		/* $htmlContent=getTypeByHTML();
		$this->assign('htmlContent',$htmlContent);
 */
	    $tid=$_GET['tid'];
	    $type=M('Type');
	    //获得左侧分类
	    $larr=$type->where("fid=$tid and state=1")->select();
	    //面包屑
	    $tname=$type->field("tname")->where("id=$tid")->find();
	    $this->assign('tname',$tname);
	    $this->assign('larr',$larr);
	    //左侧品牌
	    $brand=M('brand');
	    //获得左侧分类
	    $lbarr=$brand->field("id,bname")->where("typeid=$tid ")->select();
	    $this->assign('lbarr',$lbarr);
	    //根据位置深度或产品分类查询
 	    if(isset($_GET['tstr'])){
	        $typestr=">".$_GET['tstr'].">";
	    }else{
	         $typestr=">$tid>";
	    } 
	    
	    $product=M("Product");
	    $num=$product->where("typestr like '{$typestr}%'")->count();
	    
	    $pageSize=6;
	    $page=new \Think\Page($num,$pageSize);
	    $start=$page->firstRow;
	    $pageStr=$page->show();
	    $arr=$product->where("typestr like '{$typestr}%'")->order('id asc')->limit("$start,$pageSize")->select();
	     
	    $productimage=M("Productimage");
	    foreach($arr as $k => $v){
	        $productid=$v['id'];//获取产品的id
	        $imageArr=$productimage->where("productid=$productid")->find();
	        $imagename=$imageArr['imagename'];
	        $arr[$k]['imagename']=$imagename;
	    }
	     
	    $this->assign('arr',$arr);
	    $this->assign('pageStr',$pageStr);
		$this->display();
	}
    function getbrand(){        
        $brndid=$_GET['id'];
       
        $product=M("Product");
        $num=$product->where("brandid=$brndid")->count();
        $pageSize=6;
        $page=new \Think\Page($num,$pageSize);
        $start=$page->firstRow;
        $pageStr=$page->show();
        $arr=$product->where("brandid=$brndid")->order('id asc')->limit("$start,$pageSize")->select();
        
        $productimage=M("Productimage");
        foreach($arr as $k => $v){
            $productid=$v['id'];//获取产品的id
            $imageArr=$productimage->where("productid=$productid")->find();
            $imagename=$imageArr['imagename'];
            $arr[$k]['imagename']=$imagename;
        }
        
            //var_dump($arr);
        	$json = json_encode($arr);
			echo $json;
    }
	function detail(){
		/*$htmlContent=getTypeByHTML();
		$this->assign('htmlContent',$htmlContent);*/
		$id=(int)$_GET['id'];
		//根据产品id，获取产品信息，产品图片
		$product=M('Product');
		$productimage=M('Productimage');
		$pArr=$product->join("brand as b on p.brandid=b.id")
		->alias('p')
		->field("p.*,b.bname")
		->where("p.id=$id")
		->find();
		
		$imageArr=$productimage->where("productid=$id")->select();
		//对分类字符串进行处理
		//1、把首尾的>去掉
		$typeStr=$pArr['typestr'];
		$typeStr=trim($typeStr,">");
		//2、拆分 >
		$typeArr=explode('>',$typeStr);
		//3、遍历一维数组，根据分类id获取分类名称，拼一个名称的字符串
		$str="";
		$type=M('Type');
		foreach($typeArr as $typeid){
		    $tnameArr=$type->where("id=$typeid")->find();
		    $tname=$tnameArr['tname'];
		    $str.="&gt;{$tname}";
		    //$str.="/".$tname;
		}
		$pArr['typestr']=$str;
		$this->assign('pArr',$pArr);
		$this->assign('imageArr',$imageArr);
		$this->display();		
				
	}
}