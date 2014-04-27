<?php
use common\db\XDbMigration;
use common\models\Setting;
class m131229_133230_create_setting extends XDbMigration
{
    private $_tableName = '';
    public function safeUp()
    {
        $this->_tableName = Setting::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                    'site' => "tinyint(1) unsigned NOT NULL DEFAULT '1'",
                    'sitename' => "varchar(20) NOT NULL DEFAULT ''",
                    'domain' => "varchar(30) NOT NULL",
                    'per_acc_login_faild' => "tinyint(1) unsigned NOT NULL DEFAULT '0'",
                    'per_acc_login_allowtime' => "smallint(5) unsigned NOT NULL DEFAULT '0'",
                    'locktime' => "smallint(5) unsigned NOT NULL DEFAULT '0'",
                    'per_ip_login_faild' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '每个IP允许错误次数'",
                    'per_ip_login_allowtime' => "smallint(6) unsigned NOT NULL DEFAULT '0'",
                    'register_type' => "int(11) NOT NULL DEFAULT '0'",
                    'password_strong_type' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '密码强弱'",
                    'invite_code_type' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '邀请码方式'",
                    'static_domain' => "varchar(100) DEFAULT NULL COMMENT '静态元素独立域名'",
                    'allow_login_by_username' => "tinyint(1) unsigned NOT NULL DEFAULT '0'",
                    'allow_multi_username' => "tinyint(1) unsigned DEFAULT '0'",
                    'faild_login_captcha' => "tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '错误几次显示验证码'",
                    'same_captcha_limit' => "tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '同一个验证码允许几次错误后刷新'",
                    'allow_qq_register' => "tinyint(1) unsigned NOT NULL DEFAULT '0'",
                    'updated_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'mobile_auth' => "tinyint(1) unsigned NOT NULL DEFAULT '0'",

                    "PRIMARY KEY (`site`)",
                ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
    }

	public function down()
	{
		echo "m131229_133230_create_setting does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}