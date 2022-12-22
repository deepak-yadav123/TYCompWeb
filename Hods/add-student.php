<?php include('header2.php') ;     ?>
<?php include('hod_add_header.php') ;     ?>
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
       <br><br><h1 style="color:grey;">Add Student</h1><br>
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
                     <td>PRN :</td>
                     <td><input type="text" name="prn" id="mobile_no" placeholder="Enter Mobile No."> </td>    
                   </tr>

                   <tr>
                     <td>DOB :</td>
                     <td><input type="date" name="dob" id="joining_date" placeholder=""> </td>   
                   </tr>
                    
                   <tr>
                     <td>Address:</td>
                     <td>
                         <textarea name="address" id="address" cols="30" rows="10"></textarea> 
                     </td>   
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
      $prn = $_POST['prn'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];

      if($full_name == "" || $mobile_no=="" || $prn == "" || $dob=="" || $address==""){
        $_SESSION['add_renter7'] ="<div class='error'>All Fields are  Mandatory</div>";
        header('location:'.SITEURL.'Hods/add-student.php');
      }
      else{
      // Taking Uploaded Adhar Card Into Data Base
      
      // Took Adhar Card Here above 
      
    
      $sql ="INSERT INTO add_student SET
             year_id = 1,
             full_name = '$full_name',
             mobile_no = '$mobile_no',
             prn = '$prn',
             dob = '$dob',
             address = '$address'
      ";
      
      $res = mysqli_query($conn,$sql);
      if($res==true){
        $insert = true;
        $_SESSION['add_renter'] = "<div class='submitMsg''>Student Added Succesfully</div>";
        // Problem is there in redirevting **********....
        header('location:'.SITEURL.'Hods/add-student.php');
        echo "<p class='submitMsg'>Thanks Student Added Go Back!</p>";
      }
      else {
        $_SESSION['add_renter'] = "<div class='error''>Error in Adding Student</div>";        
        header('location:'.SITEURL.'Hods/add-student.php');
      }
    }

  }



?>
<?php include('../details/footer.php') ;     ?>