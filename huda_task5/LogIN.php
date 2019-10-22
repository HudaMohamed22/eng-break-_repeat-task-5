 <?php
	session_start();

       $link = mysqli_connect("localhost", "root", "hanaa12300", "signup");
      $myemail = mysqli_real_escape_string($link,$_GET['emaill']);
      $mypassword = mysqli_real_escape_string($link,$_GET['passwordd']); 
       $sql = "SELECT ID FROM user WHERE Email = '$myemail' and password = '$mypassword'";

      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	if($count == 1){
		
		 //session_register("emaill");
         $_SESSION['email'] = $myemail;
		 $_SESSION['password'] = $mypassword;
		 
         header('location: SecPage.html');
		exit();
	}
	else {
		echo "Your Login Name or Password is invalid";
		header('location: task4.html');
		
		
          
      }
mysqli_close($link);

?>