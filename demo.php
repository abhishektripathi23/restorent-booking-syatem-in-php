<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['Name'];
    $mob=$_POST['Mob'];
    $email=$_POST['email'];
    $password=$_POST['Pass'];
    
    $serever="localhost";
    $username="root";   
    $password="";
    $database="form.php";


$con= mysqli_connect($serever,$username,$password,$database);

if($con){
    //echo "connection is sucsesfull";
     $sql="insert into `login`(name,email,password,mobile)
     values('$name','$email','$password',' $mob')";

     $result=mysqli_query($con,$sql);
    if($result)
    {
        echo '<script>alert("Registerg sucssesfully")</script>';    
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    echo "error finding";
} 

}

?>