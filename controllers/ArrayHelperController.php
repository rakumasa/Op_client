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

    $array3 = [
                ['id'=>1,'name'=>'john','phone'=>12363],
                ['id'=>2,'name'=>'daneil','phone'=>763882],
                ['id'=>3,'name'=>'samuel','phone'=>34332],
                ['id'=>4,'name'=>'dave','phone'=>54565],
                ['id'=>5,'name'=>'seth','phone'=>980897]
              ];

    // ArrayHelper first arrayname, and key name or index number
    $data = ArrayHelper::getValue($array,'five');

    $data2 = ArrayHelper::getValue($array2, 2);

    // check key is existed in array [true or false]
    $data3 = ArrayHelper::keyExists('one', $array);

    // index data by array. First array name and key name
    $data4 = ArrayHelper::index($array3,'id');

    // Use Column to check the data
    $data5 = ArrayHelper::getColumn($array3,'id');

    // Use map to show the data
    $data6 = ArrayHelper::map($array3,'id','name');

    // Use multiSort
    $data7 = ArrayHelper::multisort($array3,'id',SORT_DESC);

    echo json_encode($data);

    echo json_encode($data2);

    echo json_encode($data3);

    echo json_encode($data4);

    echo json_encode($data5);

    echo json_encode($data6);

    echo json_encode($data7);
  }

}
