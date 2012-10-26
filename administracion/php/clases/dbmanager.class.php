<?php

class DB_con{
	
	protected $dbhost 		= 'localhost';
	protected $dbusuario 	= 'root';
	protected $dbpass 		= '';
	protected $dbname		= 'teleshopping';
	protected $conexion;
	
	public function __construct(){
		$conexion = mysql_connect($this->dbhost, $this->dbusuario, $this->dbpass);
		@mysql_query("SET NAMES 'utf8'");
		@mysql_select_db($this->dbname);
		
		if (!$conexion){
		  die('No fue posible conectarse con la base de datos: ' . mysql_error());
		  return FALSE;
	  	}
	  	
	}

	public function Query($query){
		return mysql_query($query);
	}
	
	public function Salir(){
		mysql_close();
	}
	
	public function Insert($into, $dataArray){
		foreach($dataArray as $name=>$val)
		{
			$val = str_replace("\"", "\\\"", $val);
			if (isset($names) && $names != ""){
				$names .= ", ".$name;
			}else{
				$names = $name;
			}
			if (isset($values) && $values != ""){
				$values .= ", \"".$val."\"";
			}else{
				$values = "\"".mysql_real_escape_string($val)."\"";
			}
		}
		$query = $this->Query("INSERT INTO ".$into." (".$names.") VALUES (".$values.")");
		if (!$query)
			return false;
		else
			return array("state" => $query, "id" => mysql_insert_id());
	}
	
	public function Update($into, $dataArray, $where){
		foreach($dataArray as $name=>$val){
			$val = str_replace("\"", "\\\"", $val);
			$val = str_replace("'", "\'", $val);
			unset($dataArray['id']);
			if(!isset($set)){
				$set = $name."=\"".mysql_real_escape_string($val)."\"";
			}else{
				$set.= ", ".$name."=\"".mysql_real_escape_string($val)."\"";
			}
		}
		$query = $this->Query("UPDATE ".$into." SET ".$set." WHERE ".$where);
		if (!$query)
			return false;
		else
			return array("state" => $query, "id" => mysql_insert_id());
	}


	public function Delete($table, $id){
		$query = $this->Query("delete from ".$table." where id = ".$id );
	}
}


?>