<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

//Controller extend to web
class ProductController extends Controller
{
  public function actionIndex()
  {
    return $this->render('index');
  }

  public function actionDetail()
  {
    return $this->render('detail');
  }


}
