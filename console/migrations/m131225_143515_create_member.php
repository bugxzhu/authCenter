<?php
use common\db\XDbMigration;
use common\models\Member;
/**
 * 新建members表
 */
class m131225_143515_create_member extends XDbMigration
{
	private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = Member::tableName();
		if(!$this->existTable($this->_tableName)){
			$this->createTable($this->_tableName,array(
				'uid' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
				'username' => "varchar(15) NOT NULL DEFAULT ''",
				'email' => "varchar(40) NOT NULL DEFAULT ''",
                'password' => "char(32) NOT NULL",
                'salt' => "char(6) NOT NULL",
                'staus' => "tinyint(1) NOT NULL DEFAULT 0",
				"PRIMARY KEY (uid)",
                "UNIQUE KEY `email` (`email`)",
                "KEY `username` (`username`)",
                "KEY `staus` (`staus`)",
			),
			 'ENGINE=InnoDB DEFAULT CHARSET=utf8'
			);
		}else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
        echo "m131225_143515_create_member does not support migration down.\n";
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