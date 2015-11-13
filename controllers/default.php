<?php



		 include_once('config/config.php'); 
		 
		 if ($login->isUserLoggedIn() == false)  {
			header("Location: ".$dir_base);
			exit;
	
			}  	 

    	 //include_once("libraries/libs.php");
//    	 getCampagne(); 
   	 //getSedi();   	 
    	 include("views/dashboard/dashboard.php");

?>