<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	function index(){//展现登录页面
		$this->display();	
	}
	function check(){
		//检查用户名密码是否正确
		$admin=M('Admin');
		$username=$_POST['username'];
		$password=$_POST['password'];
		$result=$admin->where("username='%s' and password='%s'",$username,$password)
					  ->find();
		if($result){
			//正确创建会话变量
			$_SESSION['admin']=$result;
			$this->success("登录成功",U('Index/index'));
		}else{
			//错误，跳转到登录页
			$this->error("登录失败",U("Login/index"));
		}
	}
	//修改用户
	function usave(){
	    $type=M('Admin');
	    $id=(int)$_POST['id'];
	    $re=$type->where("id=$id")->data($_POST)->save();
	    if($re){
	        unset($_SESSION['admin']);
	        $this->success("操作成功",U("Index/index"));
	    }else{
	        $this->error("操作失败",U("Login/changge"));
	    }
	}
	//退出
    function logout()
    {
        //unset($_SESSION["userMsg"]);
        session("admin",null);
         $this->redirect("Login/index");
    }
}