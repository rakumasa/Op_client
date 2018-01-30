<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\apicall2;
use linslin\yii2\curl;

class apicallController extends Controller
{

  public function actionIndex()
  {
    return $this->render('index');
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



}
