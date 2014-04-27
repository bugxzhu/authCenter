<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_member".
 *
 * @property string $uid
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property integer $staus
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'salt'], 'required'],
            [['staus'], 'integer'],
            [['username'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 32],
            [['salt'], 'string', 'max' => 6],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'salt' => 'Salt',
            'staus' => 'Staus',
        ];
    }
}
