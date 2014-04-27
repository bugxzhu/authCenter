<?php
use common\db\XDbMigration;
use common\models\Setting;
class m140413_135911_update_setting extends XDbMigration
{
    private $_tableName = '';
    public function safeUp()
	{
        $this->_tableName = Setting::tableName();
        if($this->existTable($this->_tableName)){
            $columns = $this->db->createCommand("SELECT * FROM {$this->_tableName}")->queryAll();
            if($columns){
                echo "setting records has been existed.";
            }else{
                $sql = "INSERT INTO {$this->_tableName} (`site`, `sitename`, `domain`, `per_acc_login_faild`, `per_acc_login_allowtime`, `locktime`, `per_ip_login_faild`, `per_ip_login_allowtime`, `register_type`, `password_strong_type`, `invite_code_type`, `static_domain`, `allow_login_by_username`, `allow_multi_username`, `faild_login_captcha`, `same_captcha_limit`, `allow_qq_register`, `updated_at`, `mobile_auth`)
VALUES
	(1, 'myapp', 'center.domain.com', 5, 60, 15, 5, 60, 0, 0, 0, '', 0, 0, 2, 1, 0, 0, 0);";
                $this->execute($sql);
            }
        }else{
            echo "table is not existed.";
            return false;
        }
    }

	public function down()
	{
		echo "m140413_135911_update_setting does not support migration down.\n";
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