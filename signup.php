<?php
$errormsg="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $host = "localhost";
            $dbname = "id21874933_college";
            $username = "id21874933_college";
            $password = "Findyourfit@1234";


          
            
          

            // Establish the database connection
            $conn = new mysqli($host,$username,$password,$dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"]; // New line to get confirm password

    // Check if passwords match
    if ($password !== $confirm_password) {
        // Display error message in JavaScript alert
       $errormsg="Passwords do not match!";
    } else {
        // Prepare the SQL statement to insert the user information into the database
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);

        // Execute the SQL statement
        if ($stmt->execute()) {
            header("Location: signin.php");
            exit();
        } else {
            exit("Error: " . $conn->error);
        }

        // Close the prepared statement
        $stmt->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="icon" href="log-out.png">
  <link rel="stylesheet" href="sign.css">
  
     <link href="https://fonts.googleapis.com/css2?family=Product+Sans&display=swap" rel="stylesheet">
     
   

 
</head>
<body>
    <div align="center" style="color: #ffcccb;" class="error-message"><?php echo $errormsg; ?></div>

  <div class="frame">
  <body class="full">
  <form action="" method="post">
    <ul class="format">
       
      <div class="boxBorder">
        <img src="user.png" class="icon" width="25"><input type="email" name="email"  placeholder="Email" class="box" required>
      </div><br>
      <div class="boxBorder">
        <img src="lock.png" class="icon" width="25"><input type="password" id="password" name="password" placeholder="Password" class="box" required>
      </div>
      <div class="confirmPass">
        <img src="lock.png" class="icon" width="25"><input type="password" id="cpassword" name="confirm_password" placeholder="Confirm Password" class="confirmBox" required>
      </div>
    </ul>
      <div>
          <button id="signup">Sign Up</button>
      </div>
  </form>
</body>
</div>
</body>
</html>