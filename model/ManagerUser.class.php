<?php


class ManagerUser extends Conexao
{
	public function authenticateUser($login, $senha){
		$pdo = parent::get_instance();
		$sql = "SELECT * FROM user WHERE login = :login and senha = :senha";

		$statement = $pdo->prepare($sql);
		$statement->bindValue(":login", $login, PDO::PARAM_STR);
		$statement->bindValue(":senha", $senha, PDO::PARAM_STR);
		$statement->execute();
		return $statement->fetchAll();
	}

}