<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

class ArrayHelperController extends Controller
{
  public function actionIndex()
  {
    $array =
    [
      'one' => ['one1', 'one2','one3'],
      'two' => ['two1','two2','two3'],
      'three',
      'four',
      'five' => ['five1','five2','five3']
    ];

    $array2 = ['one', 'two', 'three'];

    // ArrayHelper first arrayname, and key name or index number
    $data = ArrayHelper::getValue($array,'five');

    $data2 = ArrayHelper::getValue($array2, 2);

    echo json_encode($data);

    echo json_encode($data2);
  }

}
