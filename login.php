<?php
    include ('connect.php');

    if(isset($_POST['submit'])){
   
        $uname= $_POST['user'];
        $Password=$_POST['pass'];
        $sql="select * from login WHERE name='$uname' and password='$Password'";
        
        $result= mysqli_query($con,$sql);
        $t1=mysqli_num_rows($result);
        
        if(empty($uname)){
            header("location: login_html = User name is required");
            exit();
        }else if(empty($Password)){
            header("location: login_html = Password is required");
            exit();
        }else{

        if($t1==1){
            header("location: index_accesed.php");
        }else{
             
            echo 
            '<script>
            alert("Invalid UserName And Password ")
            </script>';
        
            exit(); 
        }
    }
}
    
    


?>