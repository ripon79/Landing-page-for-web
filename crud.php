<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'student_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

// Insert data into the 'student' table
$sql = "INSERT INTO student (name, email, age, gender, address) 
        VALUES ('$name', '$email', $age, '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New data Added Successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
