<?php 
    $title='Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
 //   require_once 'sendemail.php';
 // SendEmail::SendMail($email, 'Thank you for subscribing to Dev Tech University', we can`t wait to work with you');
        
 ?>
 <br>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
         Subscription was Completed successfully!
    </div>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center col-6 offset-3" >
        <div class="col-6">            
        <img src="<?php echo empty($_SESSION['imagepath']) ? "uploads/default.png" : $_SESSION['imagepath'] ; ?>" height="250" width="250" class="img img-thumbnail" />
        </div>
        <div class="col-6">
             <p><b>First Name: </b><?php echo $_SESSION['firstname'] ?>
             <p><b>Last Name: </b><?php echo $_SESSION['lastname'] ?>
            <p><b>Email: </b><?php echo $_SESSION['email'] ?>
            <p><b>Gender: </b><?php echo $_SESSION['home'] ?>
            <p><b>Address: </b><?php echo $_SESSION['gender'] ?>
            <br><br>
            
    </div>
</div>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center"> 

               <button class="btn btn-secondary"> <img src="<?php echo $_SESSION['imagepath']; ?>" height="200" width="200" /></button> 
                <span class="name mt-3"><b><?php echo $_SESSION['firstname'].' '. $_SESSION['lastname'] ?></b></span> 
                <span class="idd"><?php echo $_SESSION['email'] ?></span>

            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                <span class="idd1"><?php echo $_SESSION['gender'] ?></span> <span><i class="fa fa-copy"></i></span> </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span ><?php echo $_SESSION['home'] ?></span> </div>
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
        </div>

        <div class="text-center">
        
            <br>
        <a href="index.php" class="btn btn-outline-info btn-sm">Back to Home</a>
        </div>
    </div>
</div>
<?php
    unset($_SESSION["firstname"]);
    unset($_SESSION["lastname"]);
    unset($_SESSION["email"]);
    unset($_SESSION["home"]);
    unset($_SESSION["gender"]);
    unset($_SESSION["imagepath"]);
?>



    <?php require_once 'includes/footer.php'; ?>