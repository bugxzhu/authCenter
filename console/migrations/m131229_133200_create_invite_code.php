<?php
use common\db\XDbMigration;
use common\models\InviteCode;
class m131229_133200_create_invite_code extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = InviteCode::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                    'id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
                    'invite_code' => "varchar(32) NOT NULL DEFAULT ''",
                    'uid' => "int(11) NOT NULL DEFAULT '0' COMMENT '生成邀请码者'",
                    'by_uid' => "int(11) NOT NULL DEFAULT '0' COMMENT '注册使用者'",
                    'created_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'expired_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'status' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '使用中'",

                    "PRIMARY KEY (`id`)",
                    "UNIQUE KEY `invite_code` (`invite_code`)",
                    "KEY `status` (`status`)",
                    "KEY `expired_at` (`expired_at`)",
                    "KEY `uid` (`uid`)",
                ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_133200_create_invite_code does not support migration down.\n";
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