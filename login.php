<?php
    include('config.php');

    //SingnUp Button
     if(isset($_POST['sign_up'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
    
    if($username == "" || $email == "" || $password ==""){
        $_SESSION['validation'] ="<div class='error'>All Fields are Mandatory</div>";
        header('location:'.SITEURL.'login.php');
    }
    else{
        $sql="INSERT INTO user SET
        username = '$username',
        email = '$email',
        password = '$password'
         ";
    $res = mysqli_query($conn,$sql);
    if($res==true){
        $_SESSION['success'] = "<div class='submitMsg'>Registered.</div>";
        header('location:'.SITEURL.'login.php');
        //header("Refresh:3; url=http://localhost/Room%20Khata/Services/light-bill.php"); 
    }
    else{
        $_SESSION['pay-bill'] = "<div class='error'>Try Once Again Error In RFegistering</div>";
        header('location:'.SITEURL.'login.php');
    }
    }
}

//Login Button
if(isset($_POST['login'])){ 
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if($email == "" || $password ==""){
        $_SESSION['login5'] ="<div class='error'>Email and Password is Mandatory</div>";
        header('location:'.SITEURL.'login.php');
    }
    else{
    $sql = "SELECT * FROM user Where email = '$email' and password = '$password' ";
   
    $res = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($res);
    if($count==1){
       $_SESSION['login6'] ="<div class='submit'> User LoggedIn Successfully</div>";
       header('location:'.SITEURL.'details/students.php');
    }
    else {
      $_SESSION['login5'] ="<div class='error'>Email and Password does not Match</div>";
      header('location:'.SITEURL.'adminpage.php');
    }
}
}
else{
    // if btn is not clicked

}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up / Login Form</title>
  <link rel="stylesheet" href="login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
                <form action="" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<!-- <button>Sign up</button> -->
                    <input type="submit" name ="sign_up" value="submit" class="update-btn">
				</form>
			</div>

			<div class="login">
                <form action="" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<!-- <button>Login</button> -->
                    <input type="submit" name ="login" value="submit" class="update-btn">
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
