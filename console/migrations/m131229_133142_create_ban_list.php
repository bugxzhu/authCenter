<?php
use common\db\XDbMigration;
use common\models\BanList;
class m131229_133142_create_ban_list extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = BanList::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                    'banid' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
                    'uid' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'ip' => "char(15) NOT NULL DEFAULT '0'",
                    'locktime' => "int(11) NOT NULL DEFAULT '0'",
                    'created_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    "PRIMARY KEY (`banid`)",
                    "KEY `uid` (`uid`)",
                    "KEY `locktime` (`locktime`)",
                ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_133142_create_ban_list does not support migration down.\n";
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