<?php
    include ('../../../connect.php');
    $conn->set_charset('utf8');
    $id=$_POST['id'];
    $fotoalt=$_POST['fotoalt']
    $name=$_POST['name'];
    $beschreibung=$_POST['beschreibung'];
    $preis=$_POST['preis'];
    $gruppe=$_POST['gruppe'];

    $file=$_FILES['file']['name'];
    if($file==null) {
        $file=$_POST['fotoalt'];
    } else{
        unlink("../addprodukt/".$_POST['fotoalt']);
    
    $file=date('mdYHis').'.JPG';
    $filetmp=$_FILES['file']['tmp_name'];
    $upload_file='../addprodukt/';
    move_uploaded_file($filetmp, $upload_file.$file);
    }
    $sql="UPDATE produkt SET name='$name' , beschreibung='$beschreibung' , foto=''$file , preis= '$preis' , gruppe='$gruppe' where id='$id' ";
    $result = $conn->query($sql);

    header('Location:http://localhost/phpweb/admin/sucheprodukt.php');

    ?>