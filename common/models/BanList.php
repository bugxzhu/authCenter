<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_ban_list".
 *
 * @property string $banid
 * @property string $uid
 * @property string $ip
 * @property integer $locktime
 * @property string $created_at
 */
class BanList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_ban_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'locktime', 'created_at'], 'integer'],
            [['ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banid' => 'Banid',
            'uid' => 'Uid',
            'ip' => 'Ip',
            'locktime' => 'Locktime',
            'created_at' => 'Created At',
        ];
    }
}
