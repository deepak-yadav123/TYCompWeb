 <?php 
   //include('login-check.php'); 
   include('../config.php');
   ?> 

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
       <link rel="stylesheet" href="services.css?v=<?php echo time(); ?>">
   </head>
   <body>
       <div class="menu">
           <div class="wrapper">
               <ul>
                  <li><a href="../Hods/add-student.php">Add Student</a></li>
                  <li><a href="../Hods/add-teacher.php">Add Teacher</a></li>
                  <li><a href="../Hods/add-nts.php">Add Non-teaching staff</a></li>
                  <li><a href="../Staff/students.php">Delete Staffs</a></li>
                  <!-- <li><a href="hod_login.php" class="btn-pay-deta4">Login</a></li> -->
               </ul>
           </div>
        </div>
        
   </body>
   </html>
   