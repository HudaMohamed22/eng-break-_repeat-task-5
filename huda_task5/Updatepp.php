<?php


         if(isset($_POST["Ubdate"])){
            $id=$_POST["ID"];
            $name=$_POST["FullName"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $pass=$_POST["password"];
            $servername = "localhost";
            $username = "root";
            $password = "hanaa12300";
            $dbname = "signup";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "UPDATE user SET Name='".$name."', Email='".$email."', Password='".$pass."' , Age ='".$age."' WHERE ID='".$id."'";

            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "record Updated successfully";
               header("Location:task4.html");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
        
    



?>