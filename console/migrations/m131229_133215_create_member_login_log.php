<?php
use common\db\XDbMigration;
use common\models\MemberLoginLog;
class m131229_133215_create_member_login_log extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = MemberLoginLog::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                    'id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
                    'uid' => "int(11) unsigned NOT NULL",
                    'username' => "varchar(15) DEFAULT NULL",
                    'password' => "varchar(50) DEFAULT NULL",
                    'email' => "varchar(40) DEFAULT NULL",
                    'faild_count' => "smallint(5) unsigned NOT NULL DEFAULT '0'",
                    'ip' => "char(15) NOT NULL DEFAULT ''",
                    'created_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'appid' => "smallint(5) unsigned DEFAULT '0' COMMENT '从哪个APP登陆'",
                    'ua' => "varchar(255) NOT NULL DEFAULT ''",
                    'port' => "smallint(5) unsigned DEFAULT '0'",
                    'referfer' => "varchar(500) DEFAULT NULL",

                    "PRIMARY KEY (`id`)",
                    "KEY `uid` (`uid`)",
                    "KEY `ip` (`ip`)",
                    "KEY `appid` (`appid`)",
                    "KEY `created_at` (`created_at`)",
                ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_133215_create_member_login_log does not support migration down.\n";
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