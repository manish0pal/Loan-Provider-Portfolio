<?php
include 'db.php';
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$name = ( $_POST["name"]);
$email =( $_POST['email']);
$city = ( $_POST['city']);
$phone =( $_POST['phone']);


// echo ('$phone');
// Attempt insert query execution

$sql = "INSERT INTO ref_partner (name,email,city,phone) VALUES ('$name','$email','$city','$phone')";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Records added successfully.")</script>';
} else{
    echo '<script>alert("ERROR: Could not able to save data.")</script>';
}
 
// Close connection
mysqli_close($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
