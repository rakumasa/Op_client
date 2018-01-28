<?php
namespace app\models;

use yii;
use yii\base\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use yii\data\ArrayDataProvider;

class CRUDModel extends Model
{
  public $baseUrl = 'http://localhost:8080';
  public $uri;

  public function upload(){
    echo "I am clicked";
  }



}
