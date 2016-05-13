<?php
$servername = "setapproject.org";
$username = "csc412";
$password = "csc412";
$dbname = "csc412";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



// inserting into sql
$sql = "INSERT INTO tableQuotes (quote, name) VALUES ('{$_POST['quote']}','{$_POST['name']}')";

if ($conn->query($sql) === TRUE) {
    header("Location: data.php"); /* Redirect browser */
    exit();
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>