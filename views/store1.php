<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "miniproject";
$table = "store";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$prn= mysqli_real_escape_string($conn, $_POST['prn']);
$sql = "INSERT INTO store (name, email, phone, password,prn) VALUES ('$name', '$email', '$phone', '$password','$prn')";

if ($conn->query($sql) === TRUE) 
{
    header("Location: login.ejs");
    exit(); 
     
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
