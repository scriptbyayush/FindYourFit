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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data from the HTML form
    $college_code = $_POST["college_code"];
    $college = $_POST["college"];
    $city = $_POST["city"];
    $branch = $_POST["branch"];
    $gopen = $_POST["gopen"] !== "" ? $_POST["gopen"] : null;
    $lopen = $_POST["lopen"] !== "" ? $_POST["lopen"] : null;
    $gobc = $_POST["gobc"] !== "" ? $_POST["gobc"] : null;
    $lobc = $_POST["lobc"] !== "" ? $_POST["lobc"] : null;
    $gsc = $_POST["gsc"] !== "" ? $_POST["gsc"] : null;
    $lsc = $_POST["lsc"] !== "" ? $_POST["lsc"] : null;
    $gst = $_POST["gst"] !== "" ? $_POST["gst"] : null;
    $lst = $_POST["lst"] !== "" ? $_POST["lst"] : null;
    $gnt = $_POST["gnt"] !== "" ? $_POST["gnt"] : null;
    $lnt = $_POST["lnt"] !== "" ? $_POST["lnt"] : null;
    $pwd = $_POST["pwd"] !== "" ? $_POST["pwd"] : null;
    $ews = $_POST["ews"] !== "" ? $_POST["ews"] : null;
    $mi = $_POST["mi"] !== "" ? $_POST["mi"] : null;
    $lowest_package = $_POST["lowest_package"] !== "" ? $_POST["lowest_package"] : null;
    $median_package = $_POST["median_package"] !== "" ? $_POST["median_package"] : null;
    $highest_package = $_POST["highest_package"] !== "" ? $_POST["highest_package"] : null;

    // Prepare the SQL statement to insert the college information into the database
    $sql = "INSERT INTO college2022 (college_code, college, city, branch, gopen, lopen, gobc, lobc, gsc, lsc, gst, lst, gnt, lnt, pwd, ews, mi, lowest_package, median_package, highest_package) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssssssss", $college_code, $college, $city, $branch, $gopen, $lopen, $gobc, $lobc, $gsc, $lsc, $gst, $lst, $gnt, $lnt, $pwd, $ews, $mi, $lowest_package, $median_package, $highest_package);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Redirect to index.php
        header("Location: college2022.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
