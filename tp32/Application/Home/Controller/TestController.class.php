<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
    	
		$data=M('t2')->select();
		$this->assign('data',$data);
        $this->display();
    }
}