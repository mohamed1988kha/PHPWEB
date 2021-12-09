<?php
include ('../../connect.php');
$msprache=$_POST['msprache'];
$mtitel=$_POST['mtitel'];
$mstartseite=$_POST['mstartseite'];
$müberuns=$_POST['müberuns'];
$mproduckte=$_POST['mproduckte'];
$mkontakt=$_POST['mkontakt'];
$mline1=$_POST['mline1'];
$mline2=$_POST['mline2'];
$mbutton1=$_POST['mbutton1'];
$mbutton2=$_POST['mbutton2'];
$mbutton3=$_POST['mbutton3'];
$mbutton4=$_POST['mbutton4'];
$mparagraph1=$_POST['mparagraph1'];
$mparagraph2=$_POST['mparagraph2'];
$mall=$_POST['mall'];
$mdepartment1=$_POST['mdepartment1'];
$mdepartment2=$_POST['mdepartment2'];
$mdepartment3=$_POST['mdepartment3'];
$mGetinTouch=$_POST['mGetinTouch'];
$mname=$_POST['mname'];
$memail=$_POST['memail'];
$mmassege=$_POST['mmassege'];
$msend=$_POST['msend'];
$mfacebook=$_POST['mfacebook'];
$mtwitter=$_POST['mtwitter'];
$minstagram=$_POST['minstagram'];
$myoutube=$_POST['myoutube'];
$mline3=$_POST['mline3'];


$mimg1 = $_FILES['mimg1']['name'];
$mimg1tmb = $_FILES['mimg1']['tmp_name'];
$upload_file='../../img/';
move_uploaded_file($mimg1tmp, $upload_file.$mimg1);

$mimg2 = $_FILES['mimg2']['name'];
$mimg2tmb = $_FILES['mimg2']['tmp_name'];
$upload_file='../../img/';
move_uploaded_file($mimg2tmp, $upload_file.$mimg2);

$sql="INSERT INTO info (msprache , mtitel , mstartseite , müberuns , mproduckte , mkontakt, mline1 ,
                         mline2 , mbutton1 , mbutton2 , mbutton3 , mbutton4 , mparagraph1 , mparagraph2 ,
                        mall , mdepartment1 , mdepartment2 , mdepartment3 , mGetinTouch , mname , memail , 
                        mmassege , msend , mfacebook , mtwitter , minstagram , myoutube , mline3 , mimg1 , mimg2) 
                        values('$msprache','$mtitel','$mstartseite','$müberuns','$mproduckte','$mkontakt',
                        '$mline1','$mline2','$mbutton1','$mbutton2','$mbutton3','$mbutton4','$mparagraph1',
                        '$mparagraph2','$mall','$mdepartment1','$mdepartment2','$mdepartment3','$mGetinTouch',
                        '$mname','$memail','$mmassege','$msend','$mfacebook','$mtwitter','$minstagram','$myoutube',
                        '$mline3','$mimg1','$mimg2')";

$result = $conn->query($sql);
header('Location:http://localhost/phpweb/admin/admin.php');

?>