<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_member_field".
 *
 * @property string $uid
 * @property string $realname
 * @property string $loginnum
 * @property string $avatarpath
 * @property string $district
 * @property string $qq
 * @property string $telephone
 * @property integer $mobile
 * @property string $regip
 * @property string $regdate
 * @property string $lastlogintime
 * @property string $lastloginip
 * @property string $thislogintime
 * @property string $thisloginip
 * @property string $address
 * @property string $updated_at
 * @property string $created_at
 */
class MemberField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_member_field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'loginnum', 'district', 'qq', 'mobile', 'regdate', 'lastlogintime', 'thislogintime', 'updated_at', 'created_at'], 'integer'],
            [['realname'], 'string', 'max' => 40],
            [['avatarpath'], 'string', 'max' => 50],
            [['telephone'], 'string', 'max' => 20],
            [['regip', 'lastloginip', 'thisloginip'], 'string', 'max' => 15],
            [['address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'realname' => 'Realname',
            'loginnum' => 'Loginnum',
            'avatarpath' => 'Avatarpath',
            'district' => 'District',
            'qq' => 'Qq',
            'telephone' => 'Telephone',
            'mobile' => 'Mobile',
            'regip' => 'Regip',
            'regdate' => 'Regdate',
            'lastlogintime' => 'Lastlogintime',
            'lastloginip' => 'Lastloginip',
            'thislogintime' => 'Thislogintime',
            'thisloginip' => 'Thisloginip',
            'address' => 'Address',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
