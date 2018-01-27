<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

// Controller extend to web
class TestController extends Controller
{
  //Learning how to use echo(console.log)
  public function actionServer()
  {
    echo "testing Controller";
  }

  public function actionTesting()
  {
    //declare variable
    $number = 12345;
    $name = "Microphone";
    $array = ['mic','system','video'];

    // render testing.php in view. You can pass the variable to view
    return $this->render('testing',['number'=>$number,'name'=>$name, 'array'=>$array]);
  }


}
