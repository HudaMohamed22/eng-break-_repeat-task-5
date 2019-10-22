<?php
$id = $_GET["ID"];
$con = mysqli_connect("localhost", "root", "hanaa12300", "signup");//connect to the database

// Create a query for the database
$query = 'SELECT * FROM user WHERE ID  = "'.$id.'" ';
$res=mysqli_query($con, $query);
// If the query executed properly proceed
$name="";
$age=0;
$email="";
$password="";
if($res){

$row=mysqli_fetch_array($res);
$name=$row['Name'];
$age=$row['Age'];
$email=$row['Email']; 
$password=$row['Password'];


}


else {

echo "Couldn't issue database query<br />";


}

// Close connection to the database
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>update</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="task.css">
        <meta name="viewport" content="initial-scale=1.0">
       
    </head>
    <body style ="background-color: darkgrey;">
        <div class="home">
                
            <div class=form>  
                <form class="contact" action="Updatepp.php" method="post">
                    <div class="inputform">
                             <label for="name">Full Name:</label>
                             <div class="pp">   <input class="input" type="text" name="FullName"  placeholder="Enter Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">  </div>      
                     </div>
                     <div class="inputform" >
                            <label for="name">Email:</label>
                            <div class="pp">  <input class="input" type="text" name="email"  placeholder="Enter Email Address" data-rule="email" data-msg="Please enter a valid email"></div>
                           
                        </div>
                        
                        <div class="inputform" >
                                <label for="name">Age:</label>
                                <div class="pp">  <input class="input"  type="number" name="age" placeholder="Enter Your Age"></div>
                                
                        </div>
    
                        <div class="inputform" >
                            <label for="name">Password:</label>
                        <div class="pp"> <input class="input" type="password" name="password" placeholder="Your password"  data-rule="minlen:4" data-msg="Please enter at least 4 chars of password"></div>  
                        </div>
                            <div>
                                <button class="button">
                                    Ubdate
                                </button>
                            </div>
							 
                        </div>
		               



                </form>
			
            </div>
         </div>
         
    </body>