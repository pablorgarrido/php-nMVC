<?php

/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("l'applicazione richiede che PHP non sia inferiore alla versione 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

require_once("config/config.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();


		$_SESSION['log_errors']=$login->errors;
		$_SESSION['log_messages']=$login->messages;


// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    //include("views/logged_in.php");
    
/*    
$ru = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : null;
$ru = preg_replace( '#(.*)\?(.*)#', '$1', $ru );

$ru = explode( '/', $ru );

// Elimino i vuoti
$ru = array_values( array_filter( $ru ) );
// Sperimentale
//if( count( $ru ) > 3 )
//	array_shift( $ru ); // <-- Solo se con sottocartella

//if( count( $ru ) > 2 )
	list( $dir_base, $index, $view ) = $ru;
//else
//	list( $namespace, $controller, $azione ) = array( 'generale', 'pagine', null );    

echo $dir_base." ".$index." ".$view;
*/

/*
// View model
    if(!isset($_GET['v'])) {      
 
	    include_once("libraries/libs.php");
   	 getSedi();
    	 include("views/dashboard/dashboard.php");
    
    } else {
    	 $view=$_GET['v'];
    	 
		 if (is_file("views/".$view."/".$view.".php")) {    	 
       	include("views/".$view."/".$view.".php");
       } else {
       	//include("views/login/login.php");
       	header('Location: '.$dir_base.'index.php?logout');
       } 	
    } 
    
*/    


// Controller model
    if(!isset($_GET['c'])) {      
 	
		include("controllers/default.php");    
    
    } else {
    	 $controller=$_GET['c'];
    	 
		 if (is_file("controllers/".$controller.".php")) {    	 
       	include("controllers/".$controller.".php");
       } else {
       	include("controllers/default.php"); 
       } 	
    } 
    


} else {


// load the registration class
require_once("classes/Registration.php");

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();    

		$_SESSION['reg_errors']=$registration->errors;
		$_SESSION['reg_messages']=$registration->messages;
    
    if(($_GET['c']=='register') && ($disable_registration==0)) {
		include("controllers/register.php"); 

		
    } else {
    //controller model
    	include("controllers/login.php");
    }
}

?>
