<?php

namespace app\models;

use yii;
use yii\base\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use yii\data\ArrayDataProvider;


class UserForm extends Model
{
  public $basicUrl = 'http://localhost:8080'
  public $uri;

  public $name;
  public $email;

  public function rules()
  {
    return [
            // name and email are required
            [['name','email'], 'required'],
            // email should be a valid email address
            ['email','email'],
          ];
  }
}
