<?php
    include ('../../../connect.php');
    $benutzername=$_POST['benutzername'];
    $sql="select * from benutzer where benutzername ='$benutzername'";
    $result = $conn->query($sql);
    $count = 0;
    while($row = $result->fetch_assoc()){
        $count = $result->num_rows;
    }
    if ( $count > 0) {
        header('Location:http://localhost/phpweb/test/user/adduser.php?q1=1');
        exit;
    }


    
    $Kennwort=$_POST['Kennwort'];
    $Kennwort2=$_POST['Kennwort2'];
    if ($Kennwort !== $Kennwort2 ){
        header('Location:http://localhost/phpweb/test/user/adduser.php?q1=2');
        exit;
    }
    $name=$_POST['name'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $land=$_POST['land'];
    $adresse=$_POST['adresse'];
    $arbeit=$_POST['arbeit'];
    $telefon=$_POST['telefon'];
    $status='Neu';

    $sql2="INSERT INTO benutzer ( benutzername , Kennwort , name , geburtsdatum , land , 
                            adresse , arbeit , telefon , status , sprache) VALUES
                            ('$benutzername' , '$Kennwort' , '$name' , '$geburtsdatum' 
                            , '$land' , '$adresse' , '$arbeit' , ' $telefon' , 
                            '$status' , 'Orginal')";
    $result2 = $conn->query($sql2);
    session_start();
    header('Location:http://localhost/phpweb/test/user/login.php');
        

   

?>