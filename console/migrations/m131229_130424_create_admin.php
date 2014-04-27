<?php
use common\db\XDbMigration;
use common\models\Admin;
class m131229_130424_create_admin extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = Admin::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                'id' => "tinyint(1) unsigned NOT NULL AUTO_INCREMENT",
                'username' => "char(15) NOT NULL DEFAULT ''",
                'password' => "char(32) NOT NULL DEFAULT ''",
                'safevar' => "varchar(50) DEFAULT NULL COMMENT '安全字符，可以中文'",
                'created_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                'updated_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                'lastlogintime' => "int(11) unsigned NOT NULL DEFAULT 0",
                'lastloginip' => "char(15) NOT NULL DEFAULT ''",
                'thislogintime' => "int(11) unsigned NOT NULL DEFAULT 0",
                'thisloginip' => "char(15) NOT NULL DEFAULT ''",
                'loginnum' => "smallint(5) unsigned DEFAULT '0' COMMENT '登陆次数'",
                "PRIMARY KEY (`id`)",
                "KEY `username` (`username`)",
             ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_130424_create_admin does not support migration down.\n";
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