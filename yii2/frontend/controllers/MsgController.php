<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg; 
/**
 * Site controller
 */
class MsgController extends Controller
{
	public $layout=false;
	//关闭csrf攻击
    public $enableCsrfValidation = false;
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $msgs = Msg::find()->all();
		return $this->render('index',compact('msgs'));
    }
    public function actionAdd()
    {

       #步骤1：判断请求方式
        if (Yii::$app->request->isPost) {
            #步骤2：接受数据
            $uname = Yii::$app->request->post('uname');
            $content = Yii::$app->request->post('content');
            #步骤3：插入数据
            $msg = new Msg;
            $msg->uname = $uname;
            $msg->content = $content;
            $msg->created_at =  $msg->updated_at = time();
            $rs = $msg->save();
            #步骤4：判断跳转
            return $this->redirect(['/msg']);
        }   
    }

}
