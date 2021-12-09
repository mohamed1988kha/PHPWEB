<?php
    include ('../../../connect.php');
    $conn->set_charset('utf8');
    $name=$_POST['name'];
    $beschreibung=$_POST['beschreibung'];
    $preis=$_POST['preis'];
    $gruppe=$_POST['gruppe'];

    $file=date('mdYHis').'.JPG';
    $filetmp=$_FILES['file']['tmp_name'];
    $upload_file='../addprodukt/';
    move_uploaded_file($filetmp, $upload_file.$file);

    $sql="INSERT INTO produkt (name , beschreibung , foto , preis , gruppe) VALUES 
    ('$name' , '$beschreibung' , '$file' , '$preis' , '$gruppe')";
    $result = $conn->query($sql);

    header('Location:http://localhost/phpweb/admin/addprodukt.php');

    ?>