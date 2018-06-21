<?php
<<<<<<< HEAD

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $userid
 * @property string $username
 * @property string $password
 * @property string $email
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
            [['username', 'password', 'email'], 'required'],
            [['username', 'email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }
}
=======
namespace app\models; 
use yii\db\ActiveRecord; 
 
class Users extends ActiveRecord 
{
 
}
>>>>>>> 225243b8395fef5a4de64cec1700302d7f607a01
