<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_app".
 *
 * @property integer $appid
 * @property string $appname
 * @property string $secret_key
 * @property integer $type
 * @property string $created_at
 * @property string $updated_at
 * @property integer $white_list
 * @property string $charset
 * @property string $return_url
 */
class App extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_app';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'created_at', 'updated_at', 'white_list'], 'integer'],
            [['appname'], 'string', 'max' => 20],
            [['secret_key'], 'string', 'max' => 50],
            [['charset'], 'string', 'max' => 10],
            [['return_url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appid' => 'Appid',
            'appname' => 'Appname',
            'secret_key' => 'Secret Key',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'white_list' => 'White List',
            'charset' => 'Charset',
            'return_url' => 'Return Url',
        ];
    }
}
