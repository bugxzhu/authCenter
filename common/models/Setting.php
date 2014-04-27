<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "center_setting".
 *
 * @property integer $site
 * @property string $sitename
 * @property string $domain
 * @property integer $per_acc_login_faild
 * @property integer $per_acc_login_allowtime
 * @property integer $locktime
 * @property integer $per_ip_login_faild
 * @property integer $per_ip_login_allowtime
 * @property integer $register_type
 * @property integer $password_strong_type
 * @property integer $invite_code_type
 * @property string $static_domain
 * @property integer $allow_login_by_username
 * @property integer $allow_multi_username
 * @property integer $faild_login_captcha
 * @property integer $same_captcha_limit
 * @property integer $allow_qq_register
 * @property string $updated_at
 * @property integer $mobile_auth
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'center_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site', 'per_acc_login_faild', 'per_acc_login_allowtime', 'locktime', 'per_ip_login_faild', 'per_ip_login_allowtime', 'register_type', 'password_strong_type', 'invite_code_type', 'allow_login_by_username', 'allow_multi_username', 'faild_login_captcha', 'same_captcha_limit', 'allow_qq_register', 'updated_at', 'mobile_auth'], 'integer'],
            [['domain'], 'required'],
            [['sitename'], 'string', 'max' => 20],
            [['domain'], 'string', 'max' => 30],
            [['static_domain'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site' => 'Site',
            'sitename' => 'Sitename',
            'domain' => 'Domain',
            'per_acc_login_faild' => 'Per Acc Login Faild',
            'per_acc_login_allowtime' => 'Per Acc Login Allowtime',
            'locktime' => 'Locktime',
            'per_ip_login_faild' => 'Per Ip Login Faild',
            'per_ip_login_allowtime' => 'Per Ip Login Allowtime',
            'register_type' => 'Register Type',
            'password_strong_type' => 'Password Strong Type',
            'invite_code_type' => 'Invite Code Type',
            'static_domain' => 'Static Domain',
            'allow_login_by_username' => 'Allow Login By Username',
            'allow_multi_username' => 'Allow Multi Username',
            'faild_login_captcha' => 'Faild Login Captcha',
            'same_captcha_limit' => 'Same Captcha Limit',
            'allow_qq_register' => 'Allow Qq Register',
            'updated_at' => 'Updated At',
            'mobile_auth' => 'Mobile Auth',
        ];
    }
}
