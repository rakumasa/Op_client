<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SignupForm extends Model
{
    public $first_name;
    public $last_name;
    public $employee_id;
    public $email;
    public $tenant;
    public $username;
    public $auth_key;
    public $password_hash;
    public $password_reset_token;
    public $group;
    public $state;
    public $use_external_auth;
    public $external_id;
    public $created_at;
    public $updated_at;
    public $last_login;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['first_name', 'last_name', 'employee_id', 'email', 'tenant', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'state', 'created_at'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->last_name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
