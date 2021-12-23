<?php 
    $title='View Record';
    require_once 'includes/header.php';
    require_once 'includes/checklogin.php';
    require_once 'db/conn.php';

    //get subscriber by id
    if(!isset($_GET['id'])){ 
    
        include 'includes/errormessage.php';         
    }else{
        $id = $_GET['id'];
        $result = $crud->getSubsDetails($id);
 ?>


<div class="container mt-4 mb-4 p-3 d-flex justify-content-center col-6 offset-3" >
        <div class="col-6">            
        <img src="<?php echo empty($result['avatar']) ? "uploads/default.png" : $result['avatar'] ; ?>" height="250" width="250" class="img img-thumbnail" />
        </div>
        <div class="col-6">
             <p><b>First Name: </b><?php echo $result['firstname'] ?>
             <p><b>Last Name: </b><?php echo $result['lastname'] ?>
            <p><b>Email: </b><?php echo $result['email'] ?>
            <p><b>Gender: </b><?php echo $result['home'] ?>
            <p><b>Address: </b><?php echo $result['gender'] ?>
            <br><br>
            <a href="admin.php" class="btn btn-outline-dark btn-sm">Back to List</a>
        <a href="edit.php?id=<?php echo $result['sub_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="delete.php?id=<?php echo $result['sub_id'] ?>" class="btn btn-danger btn-sm" 
                    onclick="return confirm('Are you sure you want to delete this subscriber?');" >Delete</a>
    </div>
</div>



<?php } ?>

<?php require_once 'includes/footer.php'; ?>