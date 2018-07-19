<?php
namespace Home\Controller;
use Think\Controller;
class MsgController extends Controller {
    public function index(){
    	$msgs=M('msg')->select();
		$this->assign('msgs',$msgs);
        $this->display();
    }
   public function add(){
   		if(IS_POST){
   			$postData=I('post.');
   			$postData['created_at']=time();
   			$rs=M('msg')->add($postData);
   			if($rs){
   				$this->success('入库成功',U('msg/index'));
   			}else{
   				$this->error('入库失败');
   			}
   		}

   		
   }
}