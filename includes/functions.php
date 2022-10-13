<?php
    
   /* define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "campus24");
    
	// 1. Create a database connection
	$connection= mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD, DB_NAME);
	
	check_connect($connection);
	
	/* 2. Select a database to use 
	$db_select= mysqli_select_db($connection, DB_NAME);
	check_connect($connection);
*/

    function check_connect($query) {
        global $connection;
        if(!$query){
            die("error: " . mysqli_error($connection));
        }
   }

   function start_session($name){
        session_name($name);
        session_start();
        setcookie(session_name(),session_id());
   }
   
   function check_log_in(){
        // if(!isset($_SESSION['signin']) && ($_SESSION['signin'] != 1)) {
            // header("location:index.php");
        //}       
   }

   function get_values_by_id($table, $id){ //returns array of attributes
         global $connection;
         $query = "SELECT * FROM ";
         $query .= $table;
         $query .= " WHERE id= " . $id;
         $get_values = mysqli_query($connection, $query);
        // check_connect($get_values, "142");
         $value = mysqli_fetch_array($get_values);
         return $value;
     }
     
    function trunc($phrase, $max_words) { //Open Source function! Tks guys!!!
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
            $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
    }
?>