<?php 
		header('Access-Control-Allow-Origin: *');
		include_once("../includes/conn.php");
		include_once("../includes/Crud.php");  
		$crud = new Crud();
		$query ="SELECT * FROM  `information`";
		$result = $crud->getData($query);
?>