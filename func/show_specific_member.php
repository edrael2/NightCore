<?php
		header('Access-Control-Allow-Origin: *');
		include_once("../includes/conn.php");
		include_once("../includes/Crud.php");  
		$id= $_GET['id'];
		$crud = new Crud();
		$query ="SELECT * FROM `information` WHERE `Information`.`Idno`= $id";
		$result = $crud->getData($query);
		
?>