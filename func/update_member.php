<?php
header('Access-Control-Allow-Origin: *');
require("../utilities/utility.php");
include("../templates/header.php");
include("../includes/Crud.php");
$crud = new Crud();
echo $_POST['id'];
 if(isset($_POST['submit'])){
	$id= test_input($_POST['id']);
	$Fname= test_input($_POST['fname']);
	$Mname= test_input($_POST['mname']);
	$Lname= test_input($_POST['lname']);
	$Address= test_input($_POST['Address']);
	$Contactno= test_input($_POST['ContactNo']);
	$Email = test_input($_POST['Email']);
	$Datejoined= test_input($_POST['Date']);
	$Gender= test_input($_POST['Gender']);
	$Referrer= test_input($_POST['Referrer']);
	$Occupation= test_input($_POST['Occupation']);
	
	
	$result = $crud->execute("UPDATE information SET 
	`Fname`='".$Fname."',
	`Mname`='".$Mname."',
	`Lname`='".$Lname."',
	`Address`='".$Address."',
	`ContactNo`='".$Contactno."',
	`EmailAddress`='".$Email."',
	`DateJoined`='".$Datejoined."',
	`Gender`='".$Gender."',
	`Referrer`='".$Referrer."',
	`Occupation`='".$Occupation."'
	WHERE information.`Idno`=$id
	");
	
	header("Location: ../members.php");
	
}
?>
