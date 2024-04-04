<!DOCTYPE html>
<html>
<head>
<title>Find Your Fit</title>
    <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="table.css">
    <link href="https://fonts.googleapis.com/css2?family=Product+Sans&display=swap" rel="stylesheet">
    <script src="script.js"></script>
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
       <br>
       <div class="mydiv">
       
                <h2>College</h2><br>
                <p>
                <h3>Fill the below feilds and you will be displayed the best colleges based on the previous scores:</p>
                    <br></h3><br />
                <form method="post" name="form100">
                    <p><label>Enter Percentage:</label> <input type="text" name="percentage" id="number"   value="<?php echo isset($_POST['percentage']) ? htmlspecialchars($_POST['percentage']) : ''; ?>"  required>
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     
                       <label>Enter Category:</label>  <select class="select" name="category" id="category" required>
    <option value="" disabled selected hidden>Category</option>
   
   <option value="gopen" <?php if(isset($_POST['category']) && $_POST['category'] == 'gopen') echo 'selected'; ?>>GOPEN</option>
<option value="lopen" <?php if(isset($_POST['category']) && $_POST['category'] == 'lopen') echo 'selected'; ?>>LOPEN</option>
<option value="gobc" <?php if(isset($_POST['category']) && $_POST['category'] == 'gobc') echo 'selected'; ?>>GOBC</option>
<option value="lobc" <?php if(isset($_POST['category']) && $_POST['category'] == 'lobc') echo 'selected'; ?>>LOBC</option>
<option value="gsc" <?php if(isset($_POST['category']) && $_POST['category'] == 'gsc') echo 'selected'; ?>>GSC</option>
<option value="lsc" <?php if(isset($_POST['category']) && $_POST['category'] == 'lsc') echo 'selected'; ?>>LSC</option>
<option value="gst" <?php if(isset($_POST['category']) && $_POST['category'] == 'gst') echo 'selected'; ?>>GST</option>
<option value="lst" <?php if(isset($_POST['category']) && $_POST['category'] == 'lst') echo 'selected'; ?>>LST</option>
<option value="gnt" <?php if(isset($_POST['category']) && $_POST['category'] == 'gnt') echo 'selected'; ?>>GNT</option>
<option value="lnt" <?php if(isset($_POST['category']) && $_POST['category'] == 'lnt') echo 'selected'; ?>>LNT</option>
<option value="ews" <?php if(isset($_POST['category']) && $_POST['category'] == 'ews') echo 'selected'; ?>>EWS</option>
<option value="pwd" <?php if(isset($_POST['category']) && $_POST['category'] == 'pwd') echo 'selected'; ?>>PWD</option>
<option value="mi" <?php if(isset($_POST['category']) && $_POST['category'] == 'mi') echo 'selected'; ?>>MI</option>

   
</select>

                    </p><br />
                    <p><label>Select Core Branch:</label>
                       <select id="core" name="branch" onchange="changeAll()">
    <option selected disabled hidden>Choose Core Branches</option>
    
   
    <option value="Computer Science and Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Computer Science and Engineering') echo 'selected'; ?>>Computer Science and Engineering</option>
    
     <option value="Information Technology" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Information Technology') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Information Technology</option>
    <option value="Artificial Intelligence" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Artificial Intelligence') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Artificial Intelligence</option>
    <option value="Data Science" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Data Science') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Data Science</option>
    <option value="Machine Learning" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Machine Learning') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Machine Learning</option>
     <option value="Cyber Security" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Cyber Security') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Cyber Security</option>
    
    
    <option value="Mechanical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Mechanical Engineering') echo 'selected'; ?>>Mechanical Engineering</option>
      <option value="Chemical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Chemical Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Chemical Engineering</option>
    <option value="Aeronautical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Aeronautical Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Aeronautical Engineering</option>
    <option value="Petrochemical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Petrochemical Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Petrochemical Engineering</option>
    <option value="Paper & Pulp Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Paper & Pulp Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Paper & Pulp Engineering</option>
    <option value="Civil Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Civil Engineering') echo 'selected'; ?>>Civil Engineering</option>
    <option value="Electrical Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electrical Engineering') echo 'selected'; ?>>Electrical Engineering</option>
      <option value="Electronics Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electronics Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Electronics Engineering</option>
    <option value="Electronics and Communication Engineering" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electronics and Communication Engineering') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Electronics and Communication Engineering</option>
     <option value="Electronics and Computer Science" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Electronics and Computer Science') echo 'selected'; ?>>&nbsp;&nbsp;&nbsp;&nbsp;Electronics and Computer Science</option>
    
    <option value="Food Technology" <?php if(isset($_POST['branch']) && $_POST['branch'] == 'Food Technology') echo 'selected'; ?>>Food Technology</option>
    
  
   
  
  
</select>
 &nbsp; &nbsp; &nbsp;
                        <br>
                        <br>
                    <p><input type="submit" name="submit" id="submit" value="Submit"></p>
                    
                    
                   

                    
                    
                    

            </form>
            <br>
            
   
    <br>
   
    <?php
    $errormsg="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $percentage = $_POST["percentage"];


    
   if($percentage >= 100.1) {
        $errormsg = "Please Enter a Valid Percentage.";
   }elseif($percentage <= 49.9) {
        $errormsg = "Sorry, Your Percentage are Low. Better Luck Next Time..!";
   }else{
  
    
    
    if (isset($_POST["branch"]) && !empty($_POST["branch"])) {
        
        
         
              
              
        // Get the selected value
        $strbranch = $_POST["branch"];
  $category = $_POST["category"];
 $percentage = $_POST["percentage"];

     
$branch = substr($strbranch, 0, 15);




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

       $query = "(SELECT * FROM mergecollege
WHERE $category < $percentage AND branch LIKE '%$branch%'
ORDER BY ABS($category - $percentage) ASC
LIMIT 10)
UNION ALL
(SELECT * FROM mergecollege
WHERE $category >= $percentage AND branch LIKE '%$branch%'
ORDER BY ABS($category - $percentage) ASC
LIMIT 10)
ORDER BY $category ASC;";



          $result = mysqli_query($conn, $query);

echo "  <br>  <br>
                     
    <br>
    <br>  <br>
<section>
<div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
     <thead>
        <tr>
            <th>College Code</th>
            <th>College Name</th>
            <th>City</th>
            <th>Branch</th>
            <th>$category</th>
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
             echo "<td>".number_format($row[$category], 2)."</td>";


             
                echo "</tr>";
            }

            // Close the database connection
            $conn->close();
}
}

}





?>
    </table>
    </div>
   <div style="text-align: center; color: #8B0000; font-weight: 2000 !important; background-color: #f0f0f0;"><?php echo $errormsg; ?></div>

     
</section>

 <br>
       <br>
        <br>
       <br>
        <br>
       <br>
        <br>
       <br>
        <br>
       <br> <br>
       <br>
        <br>
       <br>
      
        <br>
       <br>
       </div>
        <br>
       <br>
       
      
 

 
       
</body>

</html>