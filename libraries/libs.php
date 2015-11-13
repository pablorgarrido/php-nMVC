<?php 
//session_start();

/*

// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}

*/

function getUsers() {
	
//include_once('config/db.php');	
	
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


	$results_array = array();
	$result = mysqli_query($db,"select * from ".TAB_USERS." order by user_name;" );
	while ($row = $result->fetch_assoc()) {
  		$results_array[] = $row;
	}	
	
	$_SESSION['users'] = $results_array;
	
	mysqli_free_result($result);

	mysqli_close($db);

}




?> 