<?php
    include ('../../../connect.php');
    $sprachetest = $_GET['sprache'];
    session_start();
    if(!isSet($_SESSION['sayedbadrantest'])) {
        session_start();
        $_SESSION['sprachetest'] = $sprachetest;
        header('Location:http://localhost/phpweb/index.php');
        exit();
    }

    $benutzername=$_SESSION['sayedbadrantest'];
        $sql = "UPDATE benutzer set sprache='sprachetest'
                where benutzername = '$benutzername' ";
        $result = $conn->query($sql);
        header('Location:http://localhost/phpweb/index.php');
?>