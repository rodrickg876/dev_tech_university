<?php 
    $title='Subcription';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    ?>

<?php

    


$emailErr = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $home = $_POST['home'];
        $gender = $_POST['gender'];
        

        if(!filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE)) {
            $emailErr = "<span class='text-danger'>Invalid email format, Please try again</span>";
          } else {
            
            if ($_FILES['avatar']['size'] == 0 ){
                $destination = "uploads/default.png";
            
            }
            else{
                //profile image
            $orig_file = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $target_dir = 'uploads/';


            $destination = "$target_dir$email.$ext";
            move_uploaded_file($orig_file, $destination);
            }


            

            $isSuccess = $crud->insertSubs($fname,$lname, $email, $home, $gender, $destination);

            if(!$isSuccess){ ?>        
                <br>
                <div class="alert alert-danger">This email already exists. Please try again.</div>
                <?php   
            }
            else{
                $_SESSION['firstname'] = $fname;
                $_SESSION['lastname'] = $lname;
                $_SESSION['email'] = $email;
                $_SESSION['home'] = $home;
                $_SESSION['gender'] = $gender;
                $_SESSION['imagepath'] = $destination;
                header("Location: success.php");
            }

      }    

        
    }

 ?>

<div class="container">
<br>
<div class=" col-md-8 offset-md-2">
    <h1 class="text-center">Subscription Form</h1><br>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
<div class="mb-3 col-6">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['firstname'];  ?>">
        </div>
        <div class="mb-3 col-6">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['lastname'];  ?>">
        </div>


    </div>    
    
        
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email" name="email" required
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['email'];  ?>">

            <span class="error"> <?php echo $emailErr;?></span>
        </div>
        <div class="mb-3">
            <label for="home" class="form-label">Home Address</label>
            <input type="text" class="form-control" id="home" name="home" required
            value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['home'];  ?>">
        </div>
        <div class="mb-3">
        <label>Gender&nbsp;&nbsp;</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" checked>
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
            <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="mb-3"><br>
            <label for="avatar" class="form-label">Choose Image</label>
            <input class="form-control" type="file" accept="image/*" name="avatar" id="avatar">
        </div>
        
        </div><br>
        <div>
         <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
        </div>
    </form>
</div>
<br><br>
<div class="clearfix"></div>

<?php require_once 'includes/footer.php'; ?>