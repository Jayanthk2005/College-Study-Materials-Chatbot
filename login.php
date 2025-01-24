<?php
$servername = "localhost";
$db_username = "root";
$db_password = ""; 
$dbname = "test"; 

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    console.log("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("INSERT INTO registration (username,password) VALUES (?,?)");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();

$stmt->store_result();

if ($stmt->num_rows > 0) {
    header("Location: index2.html");
    exit();
} else {
    echo "Invalid username or password";
}

$stmt->close();
$conn->close();
?>
