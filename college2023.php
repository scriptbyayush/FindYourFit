<!DOCTYPE html>

<html>

<head>
    <title>Student Information Form</title>
    <style>
    input[type=button] {
      padding: 10px 20px;
      font-size: 20px;
      border: 2px solid #008CBA;
      background-color: #008CBA;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      transition: 0.3s;
    }
    input[type=button]:hover {
      background-color: white;
      color: #008CBA;
    }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border: 1px solid grey;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }


    </style>
</head>
<body>
    <br>
    <center>
     <input type="button" value="Home" onclick="location.href='admin.php'">
  <br>
  </center>
    
    <h1>College Information (2023)</h1>
    <form action="conn23.php" method="post" name="myform">
        <label for="college_code">College Code:</label>
        <input type="text" id="college_code" name="college_code" required><br><br>

        <label for="college">College Name:</label>
        <input type="text" id="college" name="college" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="Nagpur"><br><br>

        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" required><br><br>

        <label for="gopen">GOPEN:</label>
        <input type="text" id="gopen" name="gopen" ><br><br>

        <label for="lopen">LOPEN:</label>
        <input type="text" id="lopen" name="lopen" ><br><br>

        <label for="gobc">GOBC:</label>
        <input type="text" id="gobc" name="gobc" ><br><br>

        <label for="lobc">LOBC:</label>
        <input type="text" id="lobc" name="lobc" ><br><br>

        <label for="gsc">GSC:</label>
        <input type="text" id="gsc" name="gsc" ><br><br>

        <label for="lsc">LSC:</label>
        <input type="text" id="lsc" name="lsc" ><br><br>

        <label for="gst">GST:</label>
        <input type="text" id="gst" name="gst" ><br><br>

        <label for="lst">LST:</label>
        <input type="text" id="lst" name="lst" ><br><br>

        <label for="gnt">GNT:</label>
        <input type="text" id="gnt" name="gnt" ><br><br>

        <label for="lnt">LNT:</label>
        <input type="text" id="lnt" name="lnt" ><br><br>

        <label for="pwd">PWD:</label>
        <input type="text" id="pwd" name="pwd" ><br><br>

        <label for="ews">EWS:</label>
        <input type="text" id="ews" name="ews" ><br><br>

       
        <label for="ews">MI:</label>
        <input type="text" id="ews" name="ews" ><br><br>

        <label for="lowest_package">Lowest Package:</label>
        <input type="text" id="lowest_package" name="lowest_package" required><br><br>

        <label for="median_package">Median Package:</label>
        <input type="text" id="median_package" name="median_package" required><br><br>

        <label for="highest_package">Highest Package:</label>
        <input type="text" id="highest_package" name="highest_package" required><br><br>

        <input type="submit" value="Save" >
    </form>

    <h2>College Information</h2>
    <table>
        <tr>
            <th>College Code</th>
            <th>College Name</th>
            <th>City</th>
            <th>Branch</th>
            <th>GOPEN</th>
            <th>LOPEN</th>
            <th>GOBC</th>
            <th>LOBC</th>
            <th>GSC</th>
            <th>LSC</th>
            <th>GST</th>
            <th>LST</th>
            <th>GNT</th>
            <th>LNT</th>
            <th>PWD</th>
            <th>EWS</th> <th>MI</th>
            <th>Lowest Package</th>
            <th>Median Package</th>
            <th>Highest Package</th>
        </tr>
        <?php
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

        $query = "SELECT * FROM college2023";


          $result = mysqli_query($conn, $query);

     
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['college_code']."</td>";
                echo "<td>".$row['college']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>".$row['branch']."</td>";
                echo "<td>".$row['gopen']."</td>";
                echo "<td>".$row['lopen']."</td>";
                echo "<td>".$row['gobc']."</td>";
                echo "<td>".$row['lobc']."</td>";
                echo "<td>".$row['gsc']."</td>";
                echo "<td>".$row['lsc']."</td>";
                echo "<td>".$row['gst']."</td>";
                echo "<td>".$row['lst']."</td>";
                echo "<td>".$row['gnt']."</td>";
                echo "<td>".$row['lnt']."</td>";
                echo "<td>".$row['pwd']."</td>";
                echo "<td>".$row['ews']."</td>";
               echo "<td>".$row['mi']."</td>";
                echo "<td>".$row['lowest_package']."</td>";
                echo "<td>".$row['median_package']."</td>";
                echo "<td>".$row['highest_package']."</td>";
                echo "</tr>";
            }

            // Close the database connection
            $conn->close();
        ?>
    </table>
    
        

    <br>

    <br>
      
    <br>
    <br>
        
    <br>
    <br>
        
    <br>
    <br>
        
    <br>
    <br>
          <br>

        


    <br>

    <br>
      
    <br>
    <br>
        
    <br>
    <br>
        
    <br>
    <br>
        <br>
        

    <br>

    <br>
      
    <br>
    <br>
        
    <br>
    <br>
        
    <br>
    <br>
        
    
</body>
</html
>