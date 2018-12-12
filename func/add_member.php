<?php 
	header('Access-Control-Allow-Origin: *');
	require("../utilities/utility.php");
	include_once("../includes/conn.php");
	include_once("../includes/Crud.php");  
	$crud = new Crud();
		//Fname , Mname , Lname, Address, ContactNum, EmailAddress, Gender, Refname, Occupation, Date
		// firstname
		$firstname = test_input($_POST["Fname"]);
		//if(empty($firstname)) {$firstnameErr = "firstname is required";}
		//if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){$firstnameErr = "Only letters and white space allowed";}			
		//middlename
		$middlename = test_input($_POST['Mname']);
		//if(empty($middlename)){$middlenameErr = "middle name is required";}
		//if(!preg_match("/^[a-zA-Z ]*$/",$middlename)){$middlenameErr = "Only letters and white space allowed"; }
		// lastname
		$lastname = test_input($_POST["Lname"]);
		//if(empty($lastname)) {$lastnameErr = "lastname is required";}
		//if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){$lastnameErr = "Only letters and white space allowed"; }
		//address
		$address		= test_input($_POST['Address']);
		//if(empty($address)) {$addressErr = "address is required";}		
		//if(!preg_match("/^[a-zA-Z ]*$/",$address)){$addressErr = "Only letters and white space allowed"; }		
		//contactnumber
		$contactno = test_input($_POST["ContactNum"]);
		//if(empty($contactnumber)){$contactnoErr = "Number of person is required";}
		//if(!preg_match("/^[0-9]+$/",$contactno)) {$contactnoErr = "Invalid Number format"; }
		//emailaddress
		$email = test_input($_POST["EmailAddress"]);
		//if(empty($email)){$emailErr = "Number of person is required";}
		//if(!preg_match("/^[0-9]+$/",$email)) {$emailErr = "Invalid Number format"; }
		//date
		$date = test_input($_POST["Date"]);
		//if(empty($email)){$dateErr = "Number of person is required";}
		//if(!preg_match("/^[0-9]+$/",$date)) {$dateErr = "Invalid Number format"; }
		//Gender
		$gender = test_input($_POST['Gender']);
		//if(!preg_match("/^[0-9]+$/",$gender)) {$genderErr = "Invalid Number format"; }
		//referrer
		$referrer = test_input($_POST['RefName']);
		//if(empty($referrer)){$referrerErr = "Number of person is required";}
		//if(!preg_match("/^[0-9]+$/",$gender)) {$referrerErr = "Invalid Number format"; }
		//occupation
		$occupation = test_input($_POST['Occupation']);
		//Query for database insert
		$result = $crud->execute("INSERT INTO `information` (`Idno`, `Fname`, `Mname`, `Lname`, `Address`, `ContactNo`, `EmailAddress`, `DateJoined`, `Gender`, `Referrer`,`Image`,`Occupation`) 
		VALUES ('', '" . $firstname . "', '". $middlename ."' , '".$lastname."', '". $address."', '". $contactno ."', '" . $email ."', '" . $date . "', '". $gender ."','".$referrer."','','".$occupation."')");	
		//header('Location:../add_member.php')
		?>