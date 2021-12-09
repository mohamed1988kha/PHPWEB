<?php 
include ('../../connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$nachricht=$_POST['nachricht'];
$sql="INSERT INTO nachricht(name , email , nachricht) VALUES('$name' , '$email' , '$nachricht')";
$result = $conn->query($sql);
header('Location:http://localhost/phpweb/index.php');

?>