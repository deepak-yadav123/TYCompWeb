<?php include('header2.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <div class="container1">
       <br><br><h1 style="color:grey;">Add Teacher</h1><br>
    </div>
    <?php
         if(isset($_SESSION['add_renter7'])){
          echo $_SESSION['add_renter7'];
          unset($_SESSION['add_renter7']);
        }
        if(isset($_SESSION['add_renter'])){
          echo $_SESSION['add_renter'];
          unset($_SESSION['add_renter']);
        }
   ?>
    <div class="content">
    <form action="" method="POST" enctype="multipart/form-data">
               <table class="tbl-30"> 
                   <tr>
                     <td>Full Name :</td>
                     <td><input type="text" name="full_name" id="full_name" placeholder="Enter Your Name"> </td>    
                   </tr>

                   <tr>
                     <td>Mobile No :</td>
                     <td><input type="text" name="mobile_no" id="mobile_no" placeholder="Enter Mobile No."> </td>    
                   </tr>
                    
                   <tr>
                     <td>Subject :</td>
                     <td><input type="text" name="subject" id="subject" placeholder="Enter Mobile No."> </td>    
                   </tr>

                   <tr>
                     <td>DOB :</td>
                     <td><input type="date" name="dob" id="dob" placeholder=""> </td>   
                   </tr>
                    
                    <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit" id="submit" value="submit" class="update-btn">
                         <!-- <a href="http://localhost/Room%20Khata/Services/managerenters.php" class="update-btn" name ="submit" id="submit" value="submit">Submit</a> -->
                       </td>
                   </tr>
               </table>
               
           </form>
    </div>
</body>
</html>



<?php
  // include('../config.php');
  $insert = false;
    if(isset($_POST['submit'])){ 
        
      $full_name = $_POST['full_name'];
      $mobile_no = $_POST['mobile_no'];
      $subject = $_POST['subject'];
      $dob = $_POST['dob'];
     
      if($full_name == "" || $mobile_no == "" || $subject == ""){
        $_SESSION['add_renter7'] ="<div class='error'>All Fields are  Mandatory</div>";
        header('location:'.SITEURL.'Hods/add-teacher.php');
      }
      else{
      // Taking Uploaded Adhar Card Into Data Base
      
      // Took Adhar Card Here above 
      
    
      $sql ="INSERT INTO add_teacher SET
             full_name = '$full_name',
             mobile_no = '$mobile_no',
             subject = '$subject',
             dob = '$dob'
      ";
      
      $res = mysqli_query($conn,$sql);
      if($res==true){
        $insert = true;
        $_SESSION['add_renter'] = "<div class='submitMsg''>Teacher Added Succesfully</div>";
        // Problem is there in redirevting **********....
        header('location:'.SITEURL.'Hods/add-teacher.php');
        echo "<p class='submitMsg'>Thanks Teacher Added Go Back!</p>";
      }
      else {
        $_SESSION['add_renter'] = "<div class='error''>Error in Adding Teacher</div>";        
        header('location:'.SITEURL.'Hods/add-teacher.php');
      }
    }

  }



?>
<?php include('../details/footer.php') ;     ?>