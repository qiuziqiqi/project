<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        $arrr=array(9,6,3);
        foreach ($arrr as $k => $v) {
            $arr=M("Product")->where("state=$v")->order('id desc')->limit('6')->select();
           
            $productimage=M("Productimage");
            foreach($arr as $k => $v){
                $productid=$v['id'];//获取产品的id
                $imageArr=$productimage->where("productid=$productid")->find();
                $imagename=$imageArr['imagename'];
                $arr[$k]['imagename']=$imagename;
            }
            $arr1[]=$arr;
        }
       
        $this->assign('arr',$arr1);
        
        $this->display();
    }
    function shop(){
        
        $arrr=array(9,6,3);
        foreach ($arrr as $k => $v) {
            $product=M("Product");
            $num=$product->where("state=$v")->count();
            $pageSize=6;
            $page=new \Think\Page($num,$pageSize);
            $start=$page->firstRow;
            $pageStr=$page->show();
            
            $arr=$product->where("state=$v")->order('id desc')->limit("$start,$pageSize")->select();
            
            $productimage=M("Productimage");
            foreach($arr as $k => $v){
                $productid=$v['id'];//获取产品的id
                $imageArr=$productimage->where("productid=$productid")->find();
                $imagename=$imageArr['imagename'];
                $arr[$k]['imagename']=$imagename;
            }
            $arr1[]=$arr;
        }
    
        $this->assign('arr',$arr1);
        $this->display();

    }
}