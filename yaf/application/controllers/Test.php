<?php
/**
 * @name TestController
 * @author win10-805172027\administrator
 * @desc 测试控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract 
{
	public function indexAction() 
	{  
		$msgs=(new MsgModel);
		var_dump($msgs);
		die;
		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		$this->getView()->assign('data1',$data1);
		$this->getView()->assign('data2',$data2);
		$this->getView()->assign('data3',$data3);
		$this->getView()->render('test/index.phtml');
		
		return true;
	}
}