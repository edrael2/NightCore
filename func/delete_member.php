<?php 
header('Access-Control-Allow-Origin: *');
include_once("../includes/Crud.php");
$crud = new Crud();
echo $_GET['id'];
$result = $crud->delete_member($_GET['id']);
 header("location: ../members.php");
//echo var_dump($result);
?>
