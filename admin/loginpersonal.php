<! DOCTYPE html>
<html>
    <head>
        <title>Login Seite</title>
        <style type="text/css">
            body { 
                font-family: Arial, Helvetica, sans_serif;
            }

            div {
                width:300px;
                border: 1px solid #ccc;
            }

            input, select, textarea  {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius : 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] , button{
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
        
            </div>
            <h3 style="width:300px;">Login Seite</h3>
              
            <div class="container" style="width: 300px;">
                <form action="fun/logintestpersonal.php" method="get" >
                    <label for="fname">Benutzername</label>
                    <input type="text"  name="benutzername" placeholder="Benutzername" />

                    <label for="fname">Kennwort</label>
                    <input type="password"  name="Kennwort" placeholder="Kennwort" />

                    <input type="submit" style="width:100px; text-align:center;" value="Anmelden"/>
                </form>
            </div>
            
            <br>
            <br>
            <a href="../index.php"><button>Zurück</button></a>
        </center>
        </div>
    </body>
</html>

