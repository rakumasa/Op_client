<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

//Controller extend to web
class ProductController extends Controller
{
  public function actionIndex()
  {
    $menu = 'category';
    return $this->render('index',['menu'=>$menu]);
  }

  public function actionDetail()
  {
    return $this->render('detail');
  }


}
