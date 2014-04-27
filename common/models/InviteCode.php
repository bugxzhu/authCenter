<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_invite_code".
 *
 * @property string $id
 * @property string $invite_code
 * @property integer $uid
 * @property integer $by_uid
 * @property string $created_at
 * @property string $expired_at
 * @property integer $status
 */
class InviteCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_invite_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'by_uid', 'created_at', 'expired_at', 'status'], 'integer'],
            [['invite_code'], 'string', 'max' => 32],
            [['invite_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invite_code' => 'Invite Code',
            'uid' => 'Uid',
            'by_uid' => 'By Uid',
            'created_at' => 'Created At',
            'expired_at' => 'Expired At',
            'status' => 'Status',
        ];
    }
}
