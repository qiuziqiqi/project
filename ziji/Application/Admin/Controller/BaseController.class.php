<?php
namespace Admin\Controller; //存放在的目录下的说明
use Think\Controller;//导入具体的父类文件
class BaseController extends Controller{
	function _initialize(){
		if(!isset($_SESSION['admin'])){
			//$this->error("您还没有登录",U('Login/index'));
			echo "<script type='text/javascript'>
				  top.location.href='".U('Login/index')."';
				  </script>";
			exit();
		}
	}
}