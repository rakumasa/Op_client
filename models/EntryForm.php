<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
  // declare the username and email
  public $username;
  public $email;

  public function rules()
  {
    return [
      // first line tell what is required
      [['first_name', 'last_name', 'employee_id', 'email', 'tenant', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'state', 'created_at'], 'required'],
      // declare what need to be authenticated (matched)
      ['email','email'],
    ];
  }




}
