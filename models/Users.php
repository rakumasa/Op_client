<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $employee_id
 * @property string $email
 * @property int $tenant
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $group
 * @property string $state
 * @property int $use_external_auth
 * @property string $external_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $last_login
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'employee_id', 'email', 'tenant', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'state', 'created_at'], 'required'],
            [['tenant', 'group', 'use_external_auth', 'created_at', 'updated_at', 'last_login'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['employee_id'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 200],
            [['username', 'password_hash', 'password_reset_token', 'external_id'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['state'], 'string', 'max' => 2],
            [['employee_id'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'employee_id' => 'Employee ID',
            'email' => 'Email',
            'tenant' => 'Tenant',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'group' => 'Group',
            'state' => 'State',
            'use_external_auth' => 'Use External Auth',
            'external_id' => 'External ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'last_login' => 'Last Login',
        ];
    }
}
