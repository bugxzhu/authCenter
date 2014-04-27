<?php
use common\db\XDbMigration;
use common\models\MemberField;
class m131229_123304_create_member_field extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = MemberField::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                'uid' => "int(11) unsigned NOT NULL",
                'realname' => "varchar(40) NOT NULL DEFAULT ''",
                'loginnum' => "mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '登陆次数'",
                'avatarpath' => "varchar(50) DEFAULT NULL",
                'district' => "int(11) unsigned NOT NULL DEFAULT '0'",
                'qq' => "bigint(20) unsigned DEFAULT NULL",
                'telephone' => "varchar(20) DEFAULT NULL",
                'mobile' => "int(11) DEFAULT NULL",
                'regip' => "varchar(15) NOT NULL DEFAULT ''",
                'regdate' => "int(11) unsigned NOT NULL DEFAULT 0",
                'lastlogintime' => "int(11) unsigned NOT NULL DEFAULT 0",
                'lastloginip' => "char(15) NOT NULL DEFAULT ''",
                'thislogintime' => "int(11) unsigned NOT NULL DEFAULT 0",
                'thisloginip' => "char(15) NOT NULL DEFAULT ''",
                'address' => "varchar(255) DEFAULT NULL",
                'updated_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                'created_at' => "int(11) unsigned DEFAULT NULL",
                "PRIMARY KEY (`uid`)",
                "KEY `staus` (`loginnum`)",

            ),
            'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_123304_create_member_field does not support migration down.\n";
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