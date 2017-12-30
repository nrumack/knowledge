<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "knowledge");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$description = $mysqli->real_escape_string($_REQUEST['description']);
 
// attempt insert query execution
$sql = "INSERT INTO contact (name, phone, description) VALUES ('$name', '$phone', '$description')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>