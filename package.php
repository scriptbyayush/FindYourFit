<!DOCTYPE html>

<html>

<head>

<title>Find Your Fit</title>

  <link rel="stylesheet" href="styles.css">

  <link rel="stylesheet" href="table.css">

  <script src="script.js"></script>

  

   <link href="https://fonts.googleapis.com/css2?family=Product+Sans&display=swap" rel="stylesheet">

   


</head>



<body onload="openTab(event,'Home')" style="background-image: url('College Recommendation3.jpg'); backdrop-filter: blur(5px);">

  <div class="container">

  <h1><div class="logo"></div></h1>

    <div class="tabs-container">

    <txe>FIND YOUR FIT</txe>

      <button class="tab" onclick="window.location.href='home.php'">Home</button>

      <button class="tab" onclick="window.location.href='percentage.php'">College</button>



      <button class="tab" onclick="window.location.href='package.php'">Placements</button>

      <button class="tab" onclick="window.location.href='about.php'">About</button>

    </div>

     

      <br>

      <br> <div class="mydiv">

        <h2>Placements</h2><br>

        <p>

        <h3>Filling the below fields will show best college with great placements!</p>

        </h3>

        <br><br>

        <form name="myForm" method="post" action="">

          <p>

          <h3>Enter Required Package: <input style="width:160px" type="text" name="package" id="number" 

           value="<?php echo isset($_POST['package']) ? htmlspecialchars($_POST['package']) : ''; ?>"

          required

              placeholder=" Required Package in LpA ">

            <br><br>

            <p>

            <h3>Select Core Branch: &nbsp;

              <select id="coreBranches" onchange="changeAll2()" name="branch">

                <option selected disabled hidden>Choose Core Branch</option>

                 

               
   
    <option value="Computer Science and Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Computer Science and Engineering') echo 'selected'; ?>>Computer Science and Engineering</option>
    
     <option value="Information Technology" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Information Technology') echo 'selected'; ?>>Information Technology</option>
    <option value="Artificial Intelligence" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Artificial Intelligence') echo 'selected'; ?>>Artificial Intelligence</option>
    <option value="Data Science" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Data Science') echo 'selected'; ?>>Data Science</option>
    <option value="Machine Learning" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Machine Learning') echo 'selected'; ?>>Machine Learning</option>
    
    <option value="Mechanical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Mechanical Engineering') echo 'selected'; ?>>Mechanical Engineering</option>
      <option value="Chemical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Chemical Engineering') echo 'selected'; ?>>Chemical Engineering</option>
    <option value="Aeronautical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Aeronautical Engineering') echo 'selected'; ?>>Aeronautical Engineering</option>
    <option value="Petrochemical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Petrochemical Engineering') echo 'selected'; ?>>Petrochemical Engineering</option>
    <option value="Paper & Pulp Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Paper & Pulp Engineering') echo 'selected'; ?>>Paper & Pulp Engineering</option>
    <option value="Civil Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Civil Engineering') echo 'selected'; ?>>Civil Engineering</option>
    <option value="Electrical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electrical Engineering') echo 'selected'; ?>>Electrical Engineering</option>
      <option value="Electronics Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electronics Engineering') echo 'selected'; ?>>Electronics Engineering</option>
    <option value="Electronics and Communication Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electronics and Communication Engineering') echo 'selected'; ?>>Electronics and Communication Engineering</option>
    <option value="Food Technology" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Food Technology') echo 'selected'; ?>>Food Technology</option>
    
  
   
                 

                 

              </select>

               &nbsp; &nbsp; &nbsp;

             

            </h3>

            </p>

            <p><br>

            <p><input type="submit" name="submit" id="submit" value="Submit"></p>

      </div>

      </form>

       <br><br>

    <br>

  

  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $errormsg="";

   $highest = $_POST["package"];

   

    if($highest >= 100.1) {

    $errormsg = "Please Enter a Valid Package.";

  }else{

   

   

  if (isset($_POST["branch"]) && !empty($_POST["branch"])) {

     

     

   

        

        

    // Get the selected value

    $strbranch = $_POST["branch"];







   

$branch = substr($strbranch, 0, 6);







     
       

      
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



   

$query = "SELECT * FROM mergecollege

WHERE highest_package <= $highest AND branch LIKE '%$branch%'

ORDER BY highest_package DESC

LIMIT 20";





     $result = mysqli_query($conn, $query);



echo "

<section>

<div class='tbl-header'>

  <table cellpadding='0' cellspacing='0' border='0'>

   <thead>

    <tr>

      <th>College Code</th>

      <th>College Name</th>

      <th>City</th>

      <th>Branch</th>

      <th>Lowest Package</th>

       <th>Median Package</th>

       <th>Highest Package</th>

    </tr>

     </thead>

     </table>

     </div>

 <div class='tbl-content'>

  <table cellpadding='0' cellspacing='0' border='0'>

   <tbody>";





      while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>".$row['college_code']."</td>";

        echo "<td>".$row['college']."</td>";

        echo "<td>".$row['city']."</td>";

        echo "<td>".$row['branch']."</td>";

       echo "<td>".number_format($row['lowest_package'], 2)."</td>";



echo "<td>".number_format($row['median_package'], 2)."</td>";



echo "<td>".number_format($row['highest_package'], 2)."</td>";





       

        echo "</tr>";

      }



      // Close the database connection

      $conn->close();

}

}

}



    ?>

  </table>
 <div style="text-align: center; color: #8B0000; font-weight: 2000 !important; background-color: #f0f0f0;"></div>

  </div>

   

   
  <br><br>

    <br>  <br><br>

    <br>  <br><br>

    
</section>


 <br>

    <br><br>

    <br><br>
  <br>

    <br>
    <br><br>
 <br>

    <br><br>

    <br><br>
  <br>

    <br>
    <br><br>
 <br>

    <br><br>

    <br><br>
  <br>

    <br>
    <br><br>
 <br>

    
    <br>
    <br><br>

    </div>

    <br>

  

     

</body>



</html>