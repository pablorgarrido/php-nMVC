<?php



		 include_once('config/config.php'); 
		 
		 if ($login->isUserLoggedIn() == false)  {
			header("Location: ".$dir_base);
			exit;
	
			}  	 

 if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 0) {    // admin

    	 include_once("libraries/libs.php");
   	 getUsers();   	 
    	 include("views/users/users.php");
    	 //exit;
    	 } 
    	 
    	 //header("Location: ".$dir_base);

?>