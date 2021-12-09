<?php
    include ('../../connect.php');
    $benutzername=$_POST['benutzername'];
    $sql="select * from personal where benutzername ='$benutzername'";
    $result = $conn->query($sql);
    $count = 0;
    while($row = $result->fetch_assoc()){
        $count = $result->num_rows;
    }
    if ( $count > 0) {
        header('Location:http://localhost/phpweb/admin/addpersonal.php?q1=1');
        exit;
    }


    
    $Kennwort=$_POST['Kennwort'];
    $Kennwort2=$_POST['Kennwort2'];
    if ($Kennwort !== $Kennwort2 ){
        header('Location:http://localhost/phpweb/admin/addpersonal.php?q1=2');
        exit;
    }
    $name=$_POST['name'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $adresse=$_POST['adresse'];
    

    $sql2="INSERT INTO personal ( benutzername , Kennwort , name , geburtsdatum , 
                            adresse)  VALUES
                            ('$benutzername' , '$Kennwort' , '$name' , '$geburtsdatum' ,
                             '$adresse' )";
    $result2 = $conn->query($sql2);
    session_start();
    header('Location:http://localhost/phpweb/admin/loginpersonal.php');
        

   

?>