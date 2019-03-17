<?php
include_once'../../model/Conexao.class.php';
include_once'../../model/Manager.class.php';


$manager = new Manager();

$data = $_POST;

if (isset($data) && !empty($data)) {
	$manager->insertData("router",$data);

	header("Location: ../../view/home.php");
}