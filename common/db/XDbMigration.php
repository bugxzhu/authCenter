<?php
namespace common\db;


class XDbMigration extends \yii\db\Migration {

    /**
     * 检查列是否存在
     * @param string $tableName
     * @param string $columnName
     * @return bool
     */
    public function existColumn($tableName, $columnName) {
        return $this->getColumn($tableName, $columnName) === false ? false : true;
    }

    /**
     * 取得列
     * @param string $tableName
     * @param string $columnName
     * @return array/false
     * @example
      'Field' => string 'admin_name' (length=10)
      'Type' => string 'varchar(15)' (length=11)
      'Null' => string 'NO' (length=2)
      'Key' => string 'MUL' (length=3)
      'Default' => string '' (length=0)
      'Extra' => string '' (length=0)
     */
    public function getColumn($tableName, $columnName) {
        $columns = $this->getTableColumns($tableName);
        foreach ($columns as $column) {
            if (!isset($column['Field'])) {
                continue;
            }
            if ($column['Field'] == $columnName) {
                return $column;
            }
        }
        return false;
    }

    /**
     * 返回数据表所有列名
     * @param string $tableName
     * @return array
     */
    public function getTableColumns($tableName) {
        try {
            $columns = $this->db->createCommand("SHOW COLUMNS FROM {$tableName}")->queryAll();
        } catch (CDbException $e) {
            $columns = array();
        }
        return $columns;
    }
	
    /**
     * 返回数据表
     * @param string $tableName
     * @return array
     */
	public function getTables(){
		try{
			$tables = $this->db->createCommand("SHOW TABLES")->queryAll();
		}catch (CDbException $e) {
            $tables = array();
        }
		return $tables;
		
	}
	
    /**
     * 返回数据表
     * @param string $tableName
     * @return bool
     */
	public function existTable($tablename){
        try{
           // $query = new Query;
            $table = $this->db->createCommand("select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_NAME='".$tablename."'")->queryAll();
        }catch (CDbException $e) {
            return false;
        }
        if ($table){
            return true;
        }
        return false;
	}
		
   /**
    * @return tablePrefix
    */

    public function gettablePrefix(){
        return $this->db->tablePrefix;
    }

}
