<?php



		 include_once('config/config.php'); 
		 

	 	
		 
		 // if user is not loggged in, redirect to home	
/*
		 if ($login->isUserLoggedIn() == false)  {
			header("Location: ".$dir_base);
			exit;
	
			}  	 
*/			
			//is default controller
			include("controllers/dashboard.php");

?>