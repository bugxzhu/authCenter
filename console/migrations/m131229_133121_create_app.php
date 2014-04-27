<?php
use common\db\XDbMigration;
use common\models\App;
class m131229_133121_create_app extends XDbMigration
{
    private $_tableName = '';
	public function safeUp()
	{
        $this->_tableName = App::tableName();
        if(!$this->existTable($this->_tableName)){
            $this->createTable($this->_tableName,array(
                    'appid' => "smallint(5) unsigned NOT NULL AUTO_INCREMENT",
                    'appname' => "varchar(20) NOT NULL DEFAULT ''",
                    'secret_key' => "varchar(50) NOT NULL DEFAULT '' COMMENT '密钥'",
                    'type' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '应用类型，web还是移动'",
                    'created_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'updated_at' => "int(11) unsigned NOT NULL DEFAULT '0'",
                    'white_list' => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否白名单'",
                    'charset' => "varchar(10) NOT NULL DEFAULT '' COMMENT 'app编码'",
                    'return_url' => "varchar(200) DEFAULT NULL",

                    "PRIMARY KEY (`appid`)",
                ),
                'ENGINE=InnoDB DEFAULT CHARSET=utf8'
            );
        }else{
            echo $this->_tableName ." aleady existed.\n ";
        }
	}

	public function down()
	{
		echo "m131229_133121_create_app does not support migration down.\n";
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