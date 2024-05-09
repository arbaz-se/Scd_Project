<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "userdata"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO userinfo (username, age, address1, address2, services) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("sisss", $username, $age, $address1, $address2, $services);

// Retrieve form data
$username = $_POST['username'];
$age = $_POST['age'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$services = implode(", ", $_POST['services']);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
