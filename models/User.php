<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $user_id
 * @property string first_name 
 * @property string last_name 
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property string $accessToken
 */
 class User extends \yii\db\ActiveRecord  implements IdentityInterface
{
  public $authKey = null;
  public $accessToken = null;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name', 'username', 'password',], 'required'],
            [['username'], 'email'],
            [['user_id', 'first_name', 'last_name', 'password', 'authkey'], 'string'],

            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
      return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
      return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

     public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
    }
}
