<?php
namespace Admin\Controller;
class BrandController extends BaseController{
	function add(){
		//获取一级分类
		$type=M('Type');
		$arr=$type->where("fid=0 and state<9")->select();
		$this->assign('arr',$arr);
		$this->display();
	}
	function save(){	
			//信息入表
			$brand=M('Brand');
			$ren=$brand->data($_POST)->add();
			//echo $upload->getLastSql();
			if($ren){
				$this->success("品牌添加成功",U("Brand/oper"));
			}else{
				$this->success("品牌添加失败",U("Brand/add"));
			}
		
	}
	function oper(){
		//获取品牌的总条数
		$brand=M('Brand');
		$num=$brand->count();
		//确定每页的条数
		$pageSize=10;
		//实例化分页类
		$page=new \Think\Page($num,$pageSize);
		//获取开始位置
		$start=$page->firstRow;
		//获取当前页的数据
		$arr=$brand->join("type as t on b.typeid=t.id")
			->alias('b')
			->field("b.*,t.tname")
			->order("id desc")
			->limit("$start,$pageSize")
			->select();
		//获取分页结果
		$pageStr=$page->show();
		//传到模板上
		$this->assign('arr',$arr);
		$this->assign('pageStr',$pageStr);
		//显示模板
		$this->display();
	}
	
	function update(){
		//获取一级分类
		$type=M('Type');
		$typearr=$type->where("fid=0 and state<9")->select();
		$this->assign('typearr',$typearr);
		$id=(int)$_GET['id'];
		$brand=M('Brand');
		$arr=$brand->where("id=$id")->find();
		$this->assign('arr',$arr);
		$this->display();
	}
	function usave(){
		$surl=$_POST['surl'];
		unset($_POST['surl']);
		//接受id
		$id=(int)$_POST['id'];
		
		//操作数据库
		$brand=M("Brand");
		$ren=$brand->where("id=$id")->data($_POST)->save();
		if($ren===false){
			$this->error("品牌修改失败",$surl);
		}else{
			$this->success("品牌修改成功",$surl);
		}
	}
	
	function del(){
	    $id=(int)$_GET['id'];
	    $brand=M('Brand');
	    $product=M('Product');
	    $re=$product->where("brandid=$id")->delete();
	    $result=$brand->where("id=$id")->delete();
	    if($result){	       
	        $this->success("删除成功",U("Brand/oper"));
	    }else{
	        $this->error("删除失败",U("Brand/oper"));
	    }
	
	
	}
	
	
}