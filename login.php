<?php
include'config.php';
        $login=0;
        $invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'conn.php';
        $email=$_POST['email'];
        $password=$_POST['password'];
  
        $sql="select * from users where EMAIL='$email' and 
         PASSWORD='$password'";

        $result=mysqli_query($con,$sql);
        if($result){
                $num=mysqli_num_rows($result); 
                if($num>0){
                        $login=1;
                        session_start();
                        $_SESSION['username']=$email;
                        header('location:index.php');
                }
                else{
			$invalid=1;
                }
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="css/sig.css?v=<?=$version?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
if($invalid){
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong> Error!! </strong> Invalid data.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
}
?>
<?php
if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success!!! </strong> You have been sucessfully logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
 }

?>



<div class="form_container">
        <form action="" method="post">

        <h2 class="top">SIGN IN</h2>
        <div class="social-icons">
            <img src="images/icons/meta.png">
            <img src="images/icons/twitter.png">
            <img src="images/icons/insta.png">
            <img src="images/icons/linkedin.png">
            
        </div> 
            <div class="inp"> <input type="email" class="input-field" placeholder="Email Address" required="required"
                    name="email"></div>
            <div class="inp"><input type="password" minlength="4" class="input-field" placeholder="Password"
                    name="password" required="required"></div>
			<input type="checkbox" class="check-box">Remember Me
            <button type="submit" id="btnSubmit" class="submit-btn reg-btn">Login</button>
			<p class="fp">Forgot password ?</p>
            <p>New to Coding Pathshala? <a href="register.php"> Sign up now.</a></p>
			<div class="instead">
				<h3>or</h3>
			</div>
			<div>
			<button class="connect" onclick="google()">
				<img src="images/icons/google.png"><span>Sign in with Google</span>
			</button>
</div>
			<p>This page is protected by Google reCAPTCHA to ensure <br> you're not a bot. </p>
</div>             
        </form>
</div>
<script type="text/javascript" src="../fun.js"></script>
</body>
</html>