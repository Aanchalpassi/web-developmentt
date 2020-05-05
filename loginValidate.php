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
echo "LoginValidation page is connected to db successfully";

$sql="SELECT UserID, Password FROM User WHERE UserID = '".$_POST["username"]."' and Password = '".$_POST["password"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
		if($row["UserType"] == "admin")
		{
        echo "<h1>Hurray! Sucessfully logged in</h1>";
        echo "<br>",$_POST["username"];
        echo "<br> You are an admin of this page";
        echo "<br> You have complete previllages";
		} 
		else {
			echo "<h1>Hurray! Sucessfully logged in</h1>";
            echo "<br>",$_POST["username"];
            echo "<br> You are an customer of this page";
            echo "<br> You have only view previllages";
		}
    }
}
else{
    echo "<h1>login Failed!</h1>";
}
?>
