<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 100px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    h1 {
        font-size: 32px;
        margin-bottom: 30px;
        color: #333;
    }
    .btn-container {
        display: flex;
        justify-content: center;
    }
    .btn {
        padding: 15px 30px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px;
        transition: all 0.3s ease;
    }
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }
    .btn.college2022 {
        background: linear-gradient(to right, #6dd5ed, #2193b0);
        color: #fff;
    }
    .btn.college2023 {
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        color: #fff;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Admin Panel</h1>
        <div class="btn-container">
            <a href="college2022.php" class="btn college2022">College 2022</a>
            <a href="college2023.php" class="btn college2023">College 2023</a>
        </div>
    </div>
</body>
</html>
