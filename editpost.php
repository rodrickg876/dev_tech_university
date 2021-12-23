<?php
    require_once 'db/conn.php';
    //get values from post
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $home = $_POST['home'];
        $gender = $_POST['gender'];

        $result = $crud->editSubs($id, $fname, $lname, $email, $home, $gender);

        if($result){
            header("Location: admin.php");
        }
        else{
            include 'includes/errormessage.php';  
        }
    }
    else{
        include 'includes/errormessage.php';  
    }
        
?>