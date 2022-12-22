
<?php
    include('../config.php'); 
    $id = $_GET['id'];
    
    $sql2 = "DELETE FROM add_nts WHERE id = $id";
  
    $res = mysqli_query($conn,$sql2);
   
    if($res == true){
        $_SESSION['left-room']="<div class='error'> NTS Left The College</div>";
        header('location:'.SITEURL.'Staff/nt_staff.php');
    }
    else {
        $_SESSION['left-room']="<div class='error'>Error In Leaving College</div>";
        header('location:'.SITEURL.'Staff/nt_staff.php');
    }
?>