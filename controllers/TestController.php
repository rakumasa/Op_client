<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use linslin\yii2\curl;

// Controller extend to web
class TestController extends Controller
{


  public function actionGet()
  {
    //Init curl
    $curl = new curl\Curl();

    //GET
    $response = $curl->get('http://localhost:8080/users');

    // echo $response;

    return $this->render('index',['response'=> $response]);
  }


  public function actionGetone()
  {
    //Init curl
    $curl = new curl\Curl();

    //GET One
    $response = $curl->get('http://localhost:8080/users');


  }


  // Post with body params
  public function actionPost()
  {
    // Init curl
    $curl = new curl\Curl();

    //POST
    // $response = $curl->setOption(
    //   CURLOPT_POSTFIELDS,
    //   http_build_query(array(
    //     'id' => 'value',
    //   ))
    //   )->post('http://localhost:8080/users/create');


    return $this->render('post');
  }






}
