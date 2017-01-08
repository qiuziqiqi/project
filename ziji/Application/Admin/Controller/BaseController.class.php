<?php
namespace Admin\Controller;
use Think\Controller;
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