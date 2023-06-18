
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../inc/css/style1.css">
</head>
<body>
    <h1 class="h"> MS Institute Verwaltung</h1>
    <p class="f">
        <img src="./../inc/pics/school1.png" alt="foto" width=200><br><br>
    </p>
    <div id='mother'>
        <form action="./../controller/data_verwaltung.php" method="POST">
            
                    <label>Vor-Name:</label><br>
                    <input type="text" name="vorName" id="vorName"><br><br>
                    <label>Nach-Name:</label><br>
                    <input type="text" name="nachName" id="nachName"><br><br>
                    <label>Adresse:</label><br>
                    <input type="text" name="adresse" id="adresse"><br><br>
                    <label>E-Mail:</label><br>
                    <input type="email" name="eMail" id="eMail"><br><br>
                    <button name="add"> Eintragen </button>
                    <button name="losch"> löschen </button>
                    
        </form>
        
    </div>
        
    <div>
        <a href="./../controller/studenten_tab.php">Studenten Information Anschauen</a>
    </div>
</body>
</html>