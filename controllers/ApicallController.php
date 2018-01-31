<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\apicall;
use linslin\yii2\curl;


class ApicallController extends Controller
{

  public function actionSay($message = "Hello")
  {
    return $this->render('index',['message'=> $message]);
  }



  public function actionIndex()
  {
    return $this->render('index');
    // echo "I am here apicall controller index";
  }

  public function actionCreate()
  {
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $users = new Users();

    $users->attributes = \yii::$app->request->post();

    $users->save();

    return array('status' => true, 'data'=> "Users record is successfully updated");

    // If there are a upload data
    // if ($model->load(Yii::$app->request->post())) {
    //     $model->file = Upload::getInstance($model, )
    }

    public function actionGetall()
    {
      $response = $curl->get('http://localhost:8080/users/index');

      if($curl->errorCode === null) {
        echo $response;
      } else {
        switch ($curl->errorCode) {
          case 6;
            break;
        }
      }
    }


}
