<?php

function getTypeByHTML(){
	//获取第一级分类
	$htmlContent="";//html标签
	$type=M('Type');
	$firstArr=$type->where("fid=0 and state<9")->select();
	foreach($firstArr as $v1){
		$htmlContent.="<h2> <a target=\"_blank\" href=\"".U("Product/lister",array('tid'=>$v1['id']))."\"> {$v1['tname']}</a></h2>
		
		";
		//获取当前分类的子分类
		$twoArr=$type->where("fid={$v1['id']} and state<9")->select();
		foreach($twoArr as $v2){
			$typeStr=">{$v1['id']}>{$v2['id']}>";
			$htmlContent.="
<div class=\"h2_cat\" onmouseover=\"this.className='h2_cat active_cat'\" onmouseout=\"this.className='h2_cat'\">
<h3>
<div class=\"xianzhi\">
<a target=\"_blank\" href=\"".U("Product/lister",array("tid"=>$v1['id'],'tstr'=>$typeStr))."\">{$v2['tname']}</a> <span class=\"des\"></span>
</div>
</h3>
<div class=\"h3_cat\">
<div class=\"shadow\">
<div class=\"shadow_border\">
<ul>";
			//获取第三级
			$threeArr=$type->where("fid={$v2['id']} and state<9")->select();
			foreach($threeArr as $v3){
				$typeStrn=">{$v1['id']}>{$v2['id']}>{$v3['id']}>";
				$htmlContent.="<li><a target=\"_blank\" href=\"".U("Product/lister",array('tid'=>$v1['id'],'tstr'=>$typeStrn))."\">{$v3['tname']}</a></li>";
			}
			$htmlContent.="</ul></div></div></div></div>";
		}

	}
	
	
	return $htmlContent;
	
	
}

