<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\apicall2;

class apicallController extends Controller
{

  public function actionIndex()
  {
    return $this->render('index');
  }

  public function actionCreate()
  {
    $model = new upload();

    // If there are a upload data
    // if ($model->load(Yii::$app->request->post())) {
    //     $model->file = Upload::getInstance($model, )
    }


  }



}
