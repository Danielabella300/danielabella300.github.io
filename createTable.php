<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dabella1";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error) {
    die("connection failed: " . $conn -> connect_error);
}

$sql = "CREATE TABLE accounts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
u_name VARCHAR(30) UNIQUE,
p_word VARCHAR(30) NOT NULL,
e_mail VARCHAR(50) UNIQUE
)";

if ($conn -> query($sql) === TRUE) {
    echo "Table accounts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
} $conn->close();