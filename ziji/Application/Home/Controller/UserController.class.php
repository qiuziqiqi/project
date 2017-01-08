<?php
namespace Home\Controller;
use Think\Verify;//导入验证码类
class UserController extends BaseController{
	function reg(){
		$this->display();
	}
	function checkusername(){
		//检查用户名是否存在
		$username=$_GET['username'];
		$user=M('User');
		$re=$user->where("username='$username'")->find();
		if($re){
			echo "false";
		}else{
			echo "true";
		}
	}
	function checkemail(){
		$email=$_GET['email'];
		$user=M('User');
		$re=$user->where("email='$email'")->find();
		if($re){
			echo "false";
		}else{
			echo "ok";
		}
		
	}
	function add(){
		$user=M('User');
		$re=$user->data($_POST)->add();
		if($re){
			$this->success("会员注册成功",U("User/login"));	
		}else{
			$this->error("会员注册失败",U("User/reg"));
		}
	}
	function login(){
		$this->display();
	}
	
	/*public function login()
	{
	    //获得模型对象
	    $model = D("manager");
	    //表单验证
	    $result = $model->create();
	    if($result)
	    {
	        //开始进行登陆处理
	
	        $userName = $_POST["userName"];
	        $password = $_POST["password"];
	        $checkCode = $_POST["checkCode"];
	
	        //比对验证码
	        $veriry = new Verify();
	        $result = $veriry->check($checkCode);
	
	        if($result)
	        {
	            //验证用户名和密码
	            //登陆验证
	            $userInfo = M("manager")->where("userName='{$userName}' and password='{$password}'")->find();
	            	
	            if($userInfo == NULL)
	            {
	                $this->success("用户名或密码错误！",__APP__."/Index/index");
	            }
	            else
	            {
	                //$_SESSION["userMsg"] = $userInfo;
	                session("userMsg",$userInfo);
	                $this->success("会员登陆成功 ",__ROOT__."/admin.php/Index/index");
	            }
	        }
	        else
	        {
	            $this->success("验证码输入有误！",__APP__."/Index/index");
	        }
	    }
	    else
	    {
	        //获得错误提示信息
	        $msg = $model->getError();
	        //系统提示
	        $this->success($msg,__APP__."/Index/index");
	    }*/
	function check(){
		$s=$_POST['s'];
		//检查用户名密码是否正确
		$username=$_POST['username'];
		$password=$_POST['password'];
		$checkCode = $_POST["checkCode"];
		
		//比对验证码
		$veriry = new Verify();
		$result = $veriry->check($checkCode);
    	if($result)
    	{
    		$user=M("User");
    		$re=$user->where("username='$username' and password='$password'")->find();
    		if($re){
    			$_SESSION['user']=$re;
    			if($s==1){
    				header("location:".U("Cart/index"));
    			}else{
    			    $this->success("登录成功！",__APP__."/Index/index");   				
    			}
    		}else{
    			$this->error("登录失败",U("User/login",array('s'=>$s)));
    		}
    	}else
    		{
    		    $this->success("验证码输入有误！",__APP__."/User/login/s/".$s);
    		}
	}
	
	//退出登陆
	public function logout()
	{
	    unset($_SESSION["user"]);
	    setcookie('cart','',time()-1,'/');
	    $this->success("退出登陆成功！",__APP__."/Index/index");
	}
	
	
	function code()
	{
	    //实例化验证码类
	    $verify = new Verify();
	    //字符的个数
	    $verify->length = 4;
	    //设置字符的大小
	    $verify->fontSize = 15;
	    //显示验证码
	    $verify->entry();
	
	}
	
	
	
	
	
	
}