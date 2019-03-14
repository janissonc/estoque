<?php


class Manager extends Conexao
{

	public function insertData($table,$data){
		$pdo = parent::get_instance();
		$fields = implode(", ", array_keys($data));
		$values = ":". implode(", :",array_keys($data));
		$sql = "INSERT INTO $table($fields) VALUES ($values)";
		$statement = $pdo->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key",$value,PDO::PARAM_STR);
		}
		
		$statement->execute();
	}
	public function listData($table){
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM $table ORDER BY modelo ASC";
		$statement = $pdo->query($sql);
		$statement->execute();

		return $statement->fetchAll();
	}
	public function deleteData($table, $id){
		$pdo = parent::get_instance();
		$sql = "DELETE FROM $table WHERE id = :id";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":id", $id);
		$statement->execute();
	}
	public function getInfo($table, $id){
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM $table WHERE id = :id";
		$statement = $pdo->prepare($sql);
		$statement->bindValue(":id", $id);
		$statement->execute();

		return $statement->fetchAll();
	}
	public function updateData($table, $data, $id){
		$pdo = parent::get_instance();
		$new_values = "";
		foreach ($data as $key => $value) {
			$new_values.= "$key=:$key, ";

		}

		$new_values = substr($new_values, 0, -2);
		

		$sql = "UPDATE $table SET $new_values WHERE id = :id";
		$statement = $pdo->prepare($sql);
		foreach ($data as $key => $value) {
			$statement->bindValue(":$key", $value , PDO::PARAM_STR);
		}
		
		$statement->execute();
	}
}