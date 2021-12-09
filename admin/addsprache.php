<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] , a {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit] ,  a :hover {
  background-color: #45a059;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Neue Sprache Einfügen</h3>

<div class="container">
  <form action="fun/addsprache.php" method="post" enctype="multipart/form-data">
    <label for="fname">Sprache</label>
    <input type="text" id="msprache" name="msprache" placeholder="Sprache..">

    <label for="fname">Titel</label>
    <input type="text" id="fname" name="mtitel" placeholder="Titel..">

    <label for="fname">Startseite</label>
    <input type="text" id="mstartseite" name="mstartseite" placeholder="Startseite..">

    <label for="fname">Über Uns</label>
    <input type="text" id="müberuns" name="müberuns" placeholder="Über uns..">

    <label for="fname">Produkte</label>
    <input type="text" id="mproduckte" name="mproduckte" placeholder="Produkte..">

    <label for="fname">Kontakt</label>
    <input type="text" id="mkontakt" name="mkontakt" placeholder="Kontakt..">

    <label for="fname">Line 1</label>
    <input type="text" id="mline1" name="mline1" placeholder="Line 1..">

    <label for="fname">Line 2</label>
    <input type="text" id="mline2" name="mline2" placeholder="Line 2..">

    <label for="fname">Login</label>
    <input type="text" id="mbutton1" name="mbutton1" placeholder="Login..">

    <label for="fname">Log out</label>
    <input type="text" id="mbutton2" name="mbutton2" placeholder="Log ou..">

    <label for="fname">Neu Benutzer</label>
    <input type="text" id="mbutton3" name="mbutton3" placeholder="Neu Benutzer..">

    <label for="fname">Personal Seite</label>
    <input type="text" id="mbutton4" name="mbutton4" placeholder="Personal Seite..">

    <label for="fname">Erste Stock</label>
    <textarea id="mparagraph1" name="mparagraph1" placeholder="Erst Stock.." style="height:200px"></textarea>

    <label for="fname">Zweit Stock</label>
    <textarea id="mparagraph2" name="mparagraph2" placeholder="Zweit Stock.." style="height:200px"></textarea>

    <label for="fname">Alle Produkte</label>
    <input type="text" id="mall" name="mall" placeholder="Alle Produkte..">

    <label for="fname">Grippe 1</label>
    <input type="text" id="mdepartment1" name="mdepartment1" placeholder="Grippe 1..">

    <label for="fname">Grippe 2</label>
    <input type="text" id="mdepartment2" name="mdepartment2" placeholder="Grippe 2..">

    <label for="fname">Grippe 3</label>
    <input type="text" id="mdepartment3" name="mdepartment3" placeholder="Grippe 3..">

    <label for="fname">Nachricht zu Verwaltung</label>
    <input type="text" id="mGetinTouch" name="mGetinTouch" placeholder="Nachricht zu Verwaltung..">

    <label for="fname">Absender </label>
    <input type="text" id="mname" name="mname" placeholder="Absender ..">

    <label for="fname">E-mail</label>
    <input type="text" id="memail" name="memail" placeholder="E-mail..">

    <label for="fname">Nachricht</label>
    <input type="text" id="mmassege" name="mmassege" placeholder="Nachricht..">

    <label for="fname">Senden</label>
    <input type="text" id="msend" name="msend" placeholder="Senden..">

    <label for="fname">Fachbook Link</label>
    <input type="text" id="mfacebook" name="mfacebook" placeholder="Fachbook Link..">

    <label for="fname">Twitter Link</label>
    <input type="text" id="mtwitter" name="mtwitter" placeholder="Personal Seite..">

    <label for="fname">Yuotube Link</label>
    <input type="text" id="minstagram" name="minstagram" placeholder="Personal Seite..">

    <label for="fname">Instagram Link</label>
    <input type="text" id="myoutube" name="myoutube" placeholder="Personal Seite..">

    <label for="fname">Driet Stock</label>
    <input type="text" id="mline3" name="mline3" placeholder="Driet Stock..">

    <label for="fname">Erst Foto</label>
    <input type="button" id="mimg1" name="mimg1" value="Datei Wählen..">
    <br>
    <br>
    <label for="fname">Zweit Foto</label>
    <input type="button" id="mimg2" name="mimg2" value="Datei Wählen..">
    <br>
    <br>
    <input type="submit" value="Submit">
    <br><br>
    <a href="loginpersonal.php" >Abmelden</a>
  </form>
</div>

</body>
</html>
