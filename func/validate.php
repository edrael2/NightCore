<?php
session_start();


	include_once("includes/Crud.php");
	$crud = new Crud();
	
if(isset($_POST['login'])){
		
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$query =  "SELECT count(id) as total, ID,username,password,usertype,HotelID,firstname,lastname,contactno,email,address ,HotelName FROM users WHERE username='".$username."' AND password='".md5($password)."'";
		$result = $crud->getData($query);
		
		if($result[0]['usertype']==1){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['token']					=	md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];

				header("location:Administrator/index.php");
		}

		if($result[0]['usertype']==2){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['token']					= md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];
				$_SESSION['HotelName']				= $row['HotelName'];
				//header("location:admin.php");
				//header("location: hotelowner/HotelIndex.php");
				header("location: hotelowner/index.php");
		}
		if($result[0]['usertype']==3){
				$_SESSION['username']			 	= $row['username'];
				$_SESSION['ID'] 				 	= $row['ID'];
				$_SESSION['usertype'] 				= $row['usertype'];
				$_SESSION['HotelID'] 				= $row['HotelID'];
				$_SESSION['Firstname']				= $row['name'];
				$_SESSION['token']					= md5('abcdefghijklmnopqrstuvwxyz123456789');
				$_SESSION['Firstname']				= $row['firstname'];
				$_SESSION['Lastname']				= $row['lastname'];
				$_SESSION['Email']					= $row['email'];
				$_SESSION['Contact']				= $row['contactno'];
				$_SESSION['Address']				= $row['address'];
				//header("location:admin.php");
				header("location:index.php");
		}
				
				
}
?>