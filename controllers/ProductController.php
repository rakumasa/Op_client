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

  public function actionDetail($id,$name)
  {
    return $this->render('detail',['id'=>$id, 'name'=>$name]);
  }


}
