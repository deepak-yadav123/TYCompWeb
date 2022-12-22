<?php include('header.php') ;     ?>
<?php include('student_header.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="services.css?v=<?php echo time();?>">
</head>
<body>
      <div class="container1">
       <br><br><h1 style="color:grey;">See All Students</h1><br>
    </div><br>
    <!-- <a href="add-renter.php" class="btn-pay-deta2">Add Renter</a><br><br><br> -->
      <?php
          if(isset($_SESSION['left-room'])){
            echo $_SESSION['left-room'];
            unset($_SESSION['left-room']);
          }
          if(isset($_SESSION['update-renter'])){
            echo $_SESSION['update-renter'];
            unset($_SESSION['update-renter']);
          }
          if(isset($_SESSION['add_renter'])){
            echo $_SESSION['add_renter'];
            unset($_SESSION['add_renter']);
          }
          if(isset($_SESSION['update-renter7'])){
            echo $_SESSION['update-renter7'];
            unset($_SESSION['update-renter7']);
          }
      ?>
       <br><br>
      <div class="renter">
        <form action="pay-rent.php" method="POST" >
        <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>PRN</th>
                <th>DOB</th>
                <!-- <th>Address</th> -->
             </tr>
             <?php
                // $sql = "SELECT *FROM add_renter";
               
                $sql = "SELECT * FROM `add_student` WHERE `year_id` = 2 ";
                $res = mysqli_query($conn,$sql);
                if($res==true){
                    $count = mysqli_num_rows($res);
                    if($count>0){
                        $a=1;
                        while($rows=mysqli_fetch_assoc($res)){
                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $mobile_no = $rows['mobile_no'];
                            $prn = $rows['prn'];
                            $dob = $rows['dob'];

                            ?>
                                <tr>
                                    <th><?php echo $a++; ?></th>
                                    <th><?php echo $full_name;  ?></th>
                                    <th><?php echo $mobile_no;  ?></th>
                                    <th><?php echo $prn;  ?></th>
                            
                                    <th><?php 
                                          $date=date_create($dob);
                                          echo date_format($date,'d-M-Y');  
                                          ?></th>
                                    
                                </tr>

                                   
                           <?php
                        }
                    }

                }

              ?>
        </table>
        </form>
      </div><br><br>
    </body>
    <?php include('footer.php') ;     ?>
</html>

 