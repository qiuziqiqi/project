<?php
function getTypeByOption2($fid=0,$num=0,$fstr=""){
	//根据fid获取分类
	$optionStr="";
	$type=M('Type');
	$typeArr=$type->where("fid=$fid")
				  ->select();
	//产生缩进字符串 —
	$indentStr=str_repeat("—",$num);
	$num++;
	//$fstrn=$fstr;
	foreach($typeArr as $v){
		$optionStr.="<option value='>{$fstr}{$v['id']}>'>{$indentStr}{$v['tname']}</option>";	
		$fstrn=$fstr.$v['id'].">";
		//$fstrn.=$v['id'].">";
		//获取子级
		$sonStr=getTypeByOption2($v['id'],$num,$fstrn);//getTypeByOption(2)
		$optionStr.=$sonStr;
	}
	return $optionStr;
}
function getTypeByOption($fid=0,$num=0){
	//获取第一级分类
	$optionStr="";
	$type=M('Type');
	$typeArr=$type->where("fid=$fid")
				  ->select();
	//产生缩进字符串 —
	$indentStr=str_repeat("—",$num);
	$num++;
	foreach($typeArr as $v){
		$optionStr.="<option value='{$v['id']}'>{$indentStr}{$v['tname']}</option>";	
		//获取子级
		$sonStr=getTypeByOption($v['id'],$num);//getTypeByOption(2)
		$optionStr.=$sonStr;
	}
	return $optionStr;
}
function getTypeByTr($fid=0,$num=0){
	$trStr="";
	$type=M('Type');
	$arr=$type->where("fid=$fid and state<9")
		 	  ->select();
	$indentStr=str_repeat("—",$num);
	$num++;
	if(is_array($arr)){
		foreach($arr as $v){
			$aStr="<a href='".U("Type/change",array('id'=>$v['id'],'state'=>1))."'>导航显示</a>";
			if($v['state']==1){
				$aStr="<a href='".U("Type/change",array('id'=>$v['id'],'state'=>0))."' style='color:red;'>导航不显示</a>";
			}
			$trStr.="<tr><td width='40%'>{$indentStr}{$v['tname']}</td><td><a href='".U('Type/update',array('id'=>$v['id']))."'>修改</a>&nbsp;|&nbsp;<a href='".U('Type/del',array('id'=>$v['id']))."'>删除</a>&nbsp;|&nbsp;
					{$aStr}</td></tr>";
			$sonStr=getTypeByTr($v['id'],$num);
			$trStr.=$sonStr;
		}
	}
	return $trStr;
}







