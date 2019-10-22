<?php
   
   session_start();
    $link = mysqli_connect("localhost", "root", "hanaa12300", "signup");
   //$user_check = $_SESSION['login_user'];
   $myemail=$_SESSION['email'];
   $mypassword=$_SESSION['password'];
   $ses_sql = mysqli_query($link,"select Name FROM user WHERE  Email ='$myemail' and Password = '$mypassword'" );
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   $_SESSION['login_user']=$login_session;
   if(!isset($_SESSION['login_user'])){
      header("location:task4.html");
   }
?>