<?php
namespace Admin\Controller;
class TypeController extends BaseController{
	function add(){
	    $optionStr=getTypeByOption();
	    $this->assign("optionStr",$optionStr);
		//获取第一级分类，传到模板上		
		$this->display();
	}
	function save(){
		//保存数据入表
		$type=M('Type');
		$result=$type->data($_POST)->add();
		if($result){
			$this->success("添加成功",U('Type/oper'));	
		}else{
			$this->error("添加失败",U('Type/add'));
		}
	}
	function oper(){
		//获取所有分类，递归 不拼 option 拼tr td
		$trStr=getTypeByTr();
		$this->assign('trStr',$trStr);
		$this->display();
	}
	function del(){
		$id=(int)$_GET['id'];
		$type=M('Type');
		$re=$type->where("id=$id")
				 ->data(array('state'=>9))
				 ->save();
		if($re){
			$this->success("删除成功",U("Type/oper"));
		}else{
			$this->error("删除失败",U("Type/oper"));
		}
		
		
	}
	
	function change(){
	    $id=(int)$_GET['id'];
	    $state=(int)$_GET['state'];
	    $type=M('Type');
	    $re=$type->where("id=$id")
	    ->data(array('state'=>$state))
	    ->save();
	    if($re){
	        $this->success("操作成功",U("Type/oper"));
	    }else{
	        $this->error("操作失败",U("Type/oper"));
	    }
	
	
	}

	
	function update(){
		$optionStr=getTypeByOption();
		$this->assign("optionStr",$optionStr);
		$id=(int)$_GET['id'];
		$type=M('Type');
		$arr=$type->where("id=$id")->find();
		$this->assign('arr',$arr);
		$this->display();
	}
	function usave(){
		$type=M('Type');
		$id=(int)$_POST['id'];
		$re=$type->where("id=$id")->data($_POST)->save();
		if($re){
			$this->success("操作成功",U("Type/oper"));
		}else{
			$this->error("操作失败",U("Type/oper"));
		}
	}
	
	
	
	
	
	
}