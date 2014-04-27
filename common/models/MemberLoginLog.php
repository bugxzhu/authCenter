<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_member_login_log".
 *
 * @property string $id
 * @property string $uid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $faild_count
 * @property string $ip
 * @property string $created_at
 * @property integer $appid
 * @property string $ua
 * @property integer $port
 * @property string $referfer
 */
class MemberLoginLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_member_login_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'faild_count', 'created_at', 'appid', 'port'], 'integer'],
            [['username', 'ip'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 40],
            [['ua'], 'string', 'max' => 255],
            [['referfer'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'faild_count' => 'Faild Count',
            'ip' => 'Ip',
            'created_at' => 'Created At',
            'appid' => 'Appid',
            'ua' => 'Ua',
            'port' => 'Port',
            'referfer' => 'Referfer',
        ];
    }
}
