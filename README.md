# web-developmentt
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>Login Page</title>
</head>

<body>
<?php

echo "This is my first PHP script<br>";
echo "Welcome to my PHP page<br>";

$servername = "localhost";
$username = "root";
$password = "";
$db= "vehiclemanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

<h1>Welcome to login page</h1>
<form action="loginValidate.php" method= "post">
<label for="username">User name:</label><br>
<input type="text" id="username" name="username"><br>
<label for="password">password:</label><br>
<input type="password" id="password" name="password">
<input type="submit" value="Submit" >
</form>

</body>
</html>
