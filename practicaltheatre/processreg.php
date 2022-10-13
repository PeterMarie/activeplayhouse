<?php
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/form_functions.php");

    start_session("apsesh");

    if(isset($_POST)){
        $fields = array();
        foreach ($_POST as $key => $value) {
            $fields[$key] = mysql_prep($value);
        }

        //Begin Form Verification   
        $required = array();
        $max_length_fields = array();
        
        $required[] = 'surname';
        $required[] = 'firstname';
        $required[] = 'phone';
        $required[] = 'email';
        $required[] = 'category'; 

        $errors = check_required($required);

        $max_length_fields['phone'] = 11;
        $max_length_fields['email'] = 100;

        $errors += check_max_length_fields($max_length_fields);

        if(empty($errors)){
            //if all input fields are entered correctly
            $query = "INSERT INTO pt_regs (surname, firstname, email, phone, category) VALUES (";
            $query = $query . "'" . $fields['surname'] . "', '" . $fields['firstname'] . "', '" . $fields['email'] . "', '" . $fields['phone'] . "', " . $fields['category'];
            $query = $query . " ) ";

            // Perform query
            $result = $connection -> query($query);
            if($result){
            //    $result->free_result();
                $new_id = $connection -> insert_id;
                //echo $new_id;
                $_SESSION['id'] = $new_id;
                $_SESSION['firstname'] = $fields['firstname'];
                header('location: upload.php');
                exit;
               // echo "Didn't do shit";
           } else {
               // echo "Query failed again. <br>";
               // echo $connection->error;
               header('index.php');
               exit;
           }
        } else {
            header('index.php');
            exit;
        }
    }else{

    }
            
?>