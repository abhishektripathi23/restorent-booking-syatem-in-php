<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <link href="register.css" rel="stylesheet">
    </head>
<body>
    
<form action="register.php" method="post">
     
   
    <div class="container">
     <h2> Register Now</h2>
    <div class="name">
           <label for="name"> Name *</label><br>
           <input type="text" name="Name" placeholder="Full Name" required id="in">
    </div><br>

    <div class="mob">
        <label for="mobile">Mobile </label><br>
        <input type="Mob-number" placeholder="Mob Number" name="Mob" required id="in"><br>
    </div><br>

    
    <div class="email">
       <label for="email">E-mail </label><br>
       <input type="email" placeholder="E-mail Id" name="email" required id="in"><br>
    </div><br>

    <div class="pass">
        <label for="pass">Password </label><br>
        <input type="Password" placeholder="Password" name="Pass" required id="in"><br>
    </div><br>

    <button type="submit" class="btn" id="in" name="Submit">Submit</button>

    <p><a href="login_html.php">Login Now</a></p>

    </div>
    </from>

<?php
include('connect.php');
$con= mysqli_connect($serever,$username,$password,$database);
if(isset($_POST['Submit']))
{
$name=$_POST['Name'];
$mob=$_POST['Mob'];
$email=$_POST['email'];
$password=$_POST['Pass'];

$check=mysqli_query($con, "select * from `login` WHERE email= '$email'");
if(mysqli_num_rows($check)>0)
{
    echo '<script>alert("your Email is Alredy exist")</script>' ;
}
else{

if($con){
    //echo "connection is sucsesfull";
     $sql="insert into `login`(name,email,password,mobile)
     values('$name','$email','$password',' $mob')";

     $result=mysqli_query($con,$sql);
    if($result)
    {
        echo '<script>alert("Registered sucssesfully")</script>';    
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    echo "error finding";
} 
}
}

?>

</body>
</html>