<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body { 
                font-family: Arial, Helvetica, sans_serif;
            }

            input, select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius : 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #4caf50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;#
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049 ;
            }
            .container {
                border-radius: 5px;
                background-color: #f2f2f2 ;
                padding: 20px;
            }

            form , h3 , input , textarea{
                text-align : left;
            }
        </style>
    </head>
    <body>
        <center>
            <div style="background: red">
              <?php 
                error_reporting(0);
                        $q1=$_GET['q1'];
                            if($q1 == 1){
                                echo "Benutzername ist schon da";
                            }
                            if($q1 == 2){
                                echo "Kennwort ict nicht korekt";
                            }
              
            ?> 
            </div>
            <h3 style="width:300px;">Neu Benutzer Einfügen</h3>
              
            <div class="container" style="width: 300px;">
                <form action="fun/adduser.php" method="post" enctype="multipart/form-data" >
                    <label for="fname">Benutzername</label>
                    <input type="text" id="fname" name="benutzername" placeholder="Benutzername" />

                    <label for="fname">Kennwort</label><br>
                    <label style="font-size:10px; text-align: right; margin-tob:-10px;">Das Kennwort muss mindestens 8 Zeichen lang sein</label>
                    <input type="password" id="fname" name="Kennwort" placeholder="Kennwort" />
                    

                    <label for="fname">Kennwort Bestätigen</label>
                    <input type="password" id="fname" name="Kennwort2" placeholder="Kennwort" />

                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="name" placeholder="Vorname, Nachname" />

                    <label for="fname">Geburtsdatum</label>
                    <input type="text" id="fname" name="geburtsdatum" placeholder="Geburtsdatum" />

                    <label for="fname">Land</label>
                    <input type="text" id="fname" name="land" placeholder="Land" />

                    <label for="fname">Adresse</label>
                    <input type="text" id="fname" name="adresse" placeholder="Adresse" />

                    <label for="fname">Arbeit</label>
                    <input type="text" id="fname" name="arbeit" placeholder="Arbeit" />

                    <label for="fname">Telefon</label>
                    <input type="text" id="fname" name="telefon" placeholder="Telefon" />

                    <label for="fname">Status</label>
                    <input type="text" id="fname" name="status" placeholder="Status" />

                    <label for="fname">Sprache</label>
                    <input type="text" id="fname" name="sprache" placeholder="Sprache" />

                    <input type="submit" style="width:100px; text-align:center;" value="Submit" />
                </form>
            </div>
        </center>

    </body>
</html>
