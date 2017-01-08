<?php
namespace Admin\Controller;
class ProductController extends BaseController{
	function add(){
		$typeStr=getTypeByOption2();
		$this->assign('typestr',$typeStr);
		$brand=M("Brand");
		$bArr=$brand->select();
		$this->assign('bArr',$bArr);
		$this->display();
	}
	function getbrand(){
		$firstid=(int)$_GET['firstid'];
		//根据id获取品牌
		$brand=M('Brand');
		$arr=$brand->where('typeid='.$firstid)->select();
		foreach($arr as $v){
			echo "<option value='{$v['id']}'>{$v['bname']}</option>";
		}
	}
	function save(){
		//保存产品信息入表
		$product=M('Product');
		$_POST['pubtime']=time();
		$id=$product->data($_POST)->add();
		if($id){
			//保存图片
			$upload=new \Think\Upload();
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->maxSize=2000000;
			$upload->rootPath="./Public/images/";
			$upload->autoSub=false;
			$re=$upload->upload();
			if($re){
				//图片入表
				$productimage=M('Productimage');
				foreach($re as $v){
					$filename=$v['savename'];
					$productimage->data(array('productid'=>$id,'imagename'=>$filename))->add();	
				}
				$this->success("产品添加成功.",U('Product/oper'));
			}else{
				$this->success("产品添加成功，没有上传图片",U('Product/oper'));
			}
		}else{
			$this->error("产品添加失败",U("Product/add"));
		}
	}
	
	function oper(){
	    //获取产品的总条数
	    $product=M('Product');
	    $num=$product->count();
	    //确定每页的条数
	    $pageSize=6;
	    //实例化分页类
	    $page=new \Think\Page($num,$pageSize);
	    //获取开始位置
	    $start=$page->firstRow;
	    //获取当前页的数据
	    $arr=$product ->join("brand as b on p.brandid=b.id")
	    ->alias('p')
	    ->field("p.*,b.bname")
	    ->order("id desc")
	    ->limit("$start,$pageSize") 
	    ->select();
	    //将图片添加入结果集中
	    $productimage=M("Productimage");
	    foreach($arr as $k => $v){
	        $productid=$v['id'];//获取产品的id
	        $imageArr=$productimage->where("productid=$productid")->find();
	        $imagename=$imageArr['imagename'];
	        $arr[$k]['imagename']=$imagename;
	    }
	    //获取分页结果
	    $pageStr=$page->show();
	    //传到模板上
	    $this->assign('arr',$arr);
	    $this->assign('pageStr',$pageStr);
	    //显示模板
	    $this->display();
	}
	
		
	function update(){
		$typeStr=getTypeByOption2();
		$this->assign('typestr',$typeStr);
		$brand=M("Brand");
		$bArr=$brand->select();
		$this->assign('bArr',$bArr);
		//产品数据
		$id=(int)$_GET['id'];
		$product=M('Product');
		$pArr=$product->where("id=$id")->find();
		$this->assign('pArr',$pArr);
		//当前产品的图片   
		$productimage=M("Productimage");
		//查询
		$imageArr=$productimage->where("productid=$id")->select();
		$this->assign('imageArr',$imageArr);
		$this->display();
	}
	function delimage(){
		$imageid=$_GET['id'];//图片id
		$imagename=$_GET['iname'];//图片名称
		$productimage=M('Productimage');
		$re=$productimage->where("id=$imageid")->delete();
		if($re){
			@unlink("./Public/images/".$imagename);
			echo '1';
		}else{
			echo "0";
		}
	}
	function usave(){
	    $surl=$_POST['surl'];
	    unset($_POST['surl']);
		$productid=$_POST['id'];
		//先处理图片
		if($_FILES){
			$upload=new \Think\Upload();
			$upload->mimes=array('image/png','image/gif','image/jpeg');
			$upload->autoSub=false;
			$upload->rootPath='./Public/images/';
			$uploadArr=$upload->upload();
			$productimage=M("productimage");
			foreach($uploadArr as $v){
				//把图片信息写入到产品图片表
				$productimage->data(array('productid'=>$productid,'imagename'=>$v['savename']))->add();
			}
			$info="图片上传成功";
		}
		//产品修改
		$product=M('Product');
		$re=$product->where("id=$productid")->data($_POST)->save();
		if($re===false){
			$this->error("{$info}，产品修改失败",U("Product/oper"));
		}else{
			$this->error("{$info}，产品修改成功",$surl);
		}
				
	}
	
	function del(){
	    $id=(int)$_GET['id'];
	    $product=M('Product');
	    $re=$product->where("id=$id")->delete();
	    if($re){
	        $this->success("产品删除成功",U("Product/oper"));
	    }else{
	        $this->error("产品删除失败",U("Product/oper"));
	    }
	
	}
	
	
}