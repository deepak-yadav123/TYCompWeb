
<?php
    include('../config.php'); 
    $id = $_GET['id'];
    
    $sql2 = "DELETE FROM add_student WHERE id = $id";
  
    $res = mysqli_query($conn,$sql2);
   
    if($res == true){
        $_SESSION['left-room']="<div class='error'> Student Left The College</div>";
        header('location:'.SITEURL.'Staff/students.php');
    }
    else {
        $_SESSION['left-room']="<div class='error'>Error In Leaving College</div>";
        header('location:'.SITEURL.'Staff/students.php');
    }
?>