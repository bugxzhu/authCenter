<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_admin".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $safevar
 * @property string $created_at
 * @property string $updated_at
 * @property string $lastlogintime
 * @property string $lastloginip
 * @property string $thislogintime
 * @property string $thisloginip
 * @property integer $loginnum
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'lastlogintime', 'thislogintime', 'loginnum'], 'integer'],
            [['username', 'lastloginip', 'thisloginip'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 32],
            [['safevar'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'safevar' => 'Safevar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'lastlogintime' => 'Lastlogintime',
            'lastloginip' => 'Lastloginip',
            'thislogintime' => 'Thislogintime',
            'thisloginip' => 'Thisloginip',
            'loginnum' => 'Loginnum',
        ];
    }
}
