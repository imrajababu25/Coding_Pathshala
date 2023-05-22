<?php
        include'config.php';
        $success=0;
        $user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'conn.php';
        $firstname=$_POST['first_name'];
        $lastname=$_POST['last_name'];
        $number=$_POST['number'];
        $address=$_POST['add'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        $sql="select * from users where EMAIL='$email' or 
         MOBILE='$number'";

        $result=mysqli_query($con,$sql);
        if($result){
                $num=mysqli_num_rows($result);
                if($num>0){
                        $user=1;
                }
                else{
                        $sql="insert into users (FNAME,LNAME,MOBILE,ADDRESS
                        ,EMAIL,PASSWORD) values('$firstname','$lastname','$number','$address','$email','$password')";
                        $result=mysqli_query($con,$sql); 
                        if($result){
                                $success=1; 
                           }else{
                                   die(mysqli_error($con));
                           } 
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
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/sig.css?v=<?=$version?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
if($user){
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>User already exists!! </strong> Sign Up using different Email id or Mobile.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
}
?>
<?php
if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success!!! </strong> You have been sucessfully registered.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      header("location: index.php");
 }

?>




<div class="form_container">
        <form action="" method="post">

        <h2 class="top">SIGN UP</h2>
        <div class="social-icons">
            <img src="images/icons/meta.png">
            <img src="images/icons/twitter.png">
            <img src="images/icons/insta.png">
            <img src="images/icons/linkedin.png">
            
        </div> 
        <div class="inp"> <input type="text" class="input-field" placeholder="First Name" required="required"
                    name="first_name"></div>
            <div class="inp"><input type="text" class="input-field" placeholder="Last Name" required="required"
                    name="last_name"></div>
            <div class="inp"> <input type="tel" maxlength="10" class="input-field" placeholder="Mobile number"
                    required="required" name="number"></div>
            <div class="inp"><input type="text" class="input-field" placeholder="Address" required="required"
                    name="add"></div>
            <div class="inp"> <input type="email" oninput="validateEmail()" class="input-field" spellcheck="fasle" id="email-field" placeholder="Email Address" required="required"
                    name="email"></div>
                    <span id="email-error"></span>
            <div class="inp"><input type="password" minlength="4" class="input-field" placeholder="Create Password"
                    name="password" required="required"></div>
            <div class="inp"><input type="password" minlength="3" class="input-field" placeholder="Confirm Password"
                    name="cpassword" required="required"></div>
            
            <button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
            <p>Already have an account? <a href="login.php"> Sign in now.</a></p>
            <p>This page is protected by Google reCAPTCHA to ensure <br> you're not a bot. </p>
                        
        </form>
</div>
<script type="text/javascript" src="../fun.js"></script>
<script>
        var emailfield=document.getElementById("email-field");
        var emailerror=document.getElementById("email-error");
        function validateEmail(){
        if(!emailfield.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)){
                emailerror.innerhtml="Please enter a valid email";
                emailfield.style.borderBottomColor="red";
                emailerror.style.top="120%";
                return false;
        }
                emailerror.innerhtml="";
                emailfield.style.borderBottomColor="green";
                emailerror.style.top="100%";
                return true;
        }
</script>
</body>
</html>