<?php 
include ('../../connect.php');
$n1 = $_GET['benutzername'];
$n2 = $_GET['Kennwort'];
$sql="select * from personal where benutzername='$n1' and kennwort = '$n2'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $count = $result->num_rows;
}
if ($count > 0) {
    session_start();
    header('Location:http://localhost/phpweb/admin/admin.php');
} 
else {
    header('Location:http://localhost/phpweb/test/user/loginpersonal.php');
}

?>