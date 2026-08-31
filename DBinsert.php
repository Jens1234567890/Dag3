<?php 
$servername = "mysql14.unoeuro.com"; 
$username = "jenstoftmadsen2_dk"; 
$password = "admin2"; 
$dbname = "jenstoftmadsen2_dk_db"; 

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 

// Check connection 
if ($conn->connect_error) { 
  die("Connection failed.......: " . $conn->connect_error); 
} 
 

// prepare and bind 
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"); 
$stmt->bind_param("sss", $firstname, $lastname, $email); 

// set parameters and execute 
$firstname = $_POST["fname"]; 
$lastname = $_POST["lname"]; 
$email = $_POST["email"]; 
$stmt->execute(); 

echo "New record created successfully"; 

$stmt->close(); 
$conn->close(); 
?>