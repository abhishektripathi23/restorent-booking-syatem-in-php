<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>

   <form action="login.php" method="post" class="main">

   <div class="cont">
     <h1>Login PHP</h1>
       <div class="user">
           <label for="name">User name *</label><br>
           <input type="text" name="user" placeholder="User name" id="us" required>
       </div><br>

        <div class="password">
         <label for="password">Password *</label><br>
         <input type="password" name="pass" placeholder="password" id="pss" required>
        </div><br>

         <button type="submit" id="btn" name="submit">Submit</button><br>

         <div class="re-fo">
            <div>
         <p class="reg-btn" id="reg">If don't have account <a href="register.php" id="re">Register Now</a>
         </p>
            </div>
            <div>
         <p > <a href=register.php id="re">forget password</a> </p>
            </div>
        </div>
         
        
   </div>

     
    </form>
    
</body>
</html>