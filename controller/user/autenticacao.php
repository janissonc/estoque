<?php 
date_default_timezone_set('America/Sao_Paulo');

include_once '../../model/Conexao.class.php';
include_once '../../model/ManagerUser.class.php';


session_start();
 	
	$login = $_POST['login'];
	$senha = $_POST['senha'];//md5($_POST['senha']);

$manager = new ManagerUser();

$count_data = count($manager->authenticateUser($login, $senha));
 
if($count_data > 0){
		$tempolimite = 12000;
		$_SESSION['registro'] = time();
		$_SESSION['limite'] = $tempolimite;
	
	foreach ($manager->authenticateUser($login, $senha) as $user) {
	 	$_SESSION['id'] = $user['id'];
	 	$_SESSION['permissao'] = $user['permissao'];
		$_SESSION['usuario'] = $user['nameUser'];	 
		
	}

	if ($user['permissao']=='Total'){echo "<script>location.href = '../../view/home.php';</script>";
	}
	else{echo "<script>location.href = '../../view/home.php';</script>";
	}
}
else{echo "<script>location.href = '../../index.php';</script>";
}

?>