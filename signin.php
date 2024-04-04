<?php
$errormsg = "";
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

    $lemail = $_POST["lemail"];
    $lpassword = $_POST["lpassword"];
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Bind the parameters
    $stmt->bind_param("ss", $lemail, $lpassword);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there is a row with the given email and password
    if ($result->num_rows > 0) {
        // Row found, user is authenticated

        // Close the prepared statement
        $stmt->close();
        // Redirect to home page
        header("Location: home.php");
        exit(); // Important to exit after redirection
    } else {
        $errormsg = "Invalid Username or Password!";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="icon" href="log-in.png">
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
            <img src="user.png" class="icon" width="25"><input type="email" name="lemail" placeholder="Email" class="box" id="user" required>
          </div><br>
          <div class="boxBorder">
            <img src="lock.png" class="icon" width="25"><input type="password" name="lpassword" placeholder="Password" class="box"
              id="pass" required>
          </div>
        </ul>
        <div>
          <button id="login">Login</button>
          <p id="notamember">Not a member? <a href="signup.php" class="sign-up" >Sign Up</a></p>
          <p id="guest"><a href="home.php" target="_self" onclick="confirm('You entered as guest')">Enter as Guest</a></p>
        </div>
      </form>
    </body>
  </div>
</body>

</html>