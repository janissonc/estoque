<?php
include_once'../../model/Conexao.class.php';
include_once'../../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;
$id = $_POST['id'];

if (isset($id) && !empty($id)) {
	$manager->updateData("router",$data, $id);

	
	header("Location: ../../view/home.php");
}

?>