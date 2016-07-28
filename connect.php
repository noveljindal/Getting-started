<html>
<body>
<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="novel";  //database name which you created
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
</body>
</html>