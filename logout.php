<?php

if(isset($_POST['Submit']))
{
session_start();

session_unset();

session_destroy();

header("location:index.php");
echo "Log out succesefully";
exit();
}
?>