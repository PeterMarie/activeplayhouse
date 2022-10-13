<?php
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/form_functions.php");

    start_session("apsesh");
   // if(isset($_POST["submit"]) && isset($_FILES['proof_jpeg'])) {
        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
            //process proof of payment file
            $directory = "../images/pt_proofs/";
            $check = getimagesize($_FILES["proof_jpeg"]["tmp_name"]);
            if($check['mime'] != "image/jpeg"){
                //Wrong file type
                echo $_FILES["proof_jpeg"]["tmp_name"];
                echo $check['mime'];
            //   header('location: upload.php');
            } else {
                $filename = "proof_".$_SESSION['id'].".jpg";
                $target_file = $directory."proof_".$_SESSION['id'].".jpg";
                //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if (file_exists($target_file)) {// Unlikely!
                    header('location: upload.php');
                //  echo "Sorry, file already exists."; 
                } else {
                    if (move_uploaded_file($_FILES["proof_jpeg"]["tmp_name"], $target_file)){
                    // echo "Uploaded file is " . $target_file;
                    //save to database
                    $query = "UPDATE pt_regs SET status = 1, proof_of_payment = '" . $filename . "' WHERE id = " . $_SESSION["id"];
                    $result = $connection->query($query);
                    if($result){
                        header('location:success.php');
                    }else{
                        echo "Database not updated ooo!<br><br>";
                        echo $connection->error;
                        //header('location:upload.php');
                    }
                    }else{
                        echo "File no upload ooo!";
                    //header('location:upload.php');
                    }
                }
            }
        }else{
            //if proof of payment was not uploaded
            header('location: index.php');
        }
    /*} else {
        print "File not sent to server succesfully!";
        exit;
    }*/
    
?>