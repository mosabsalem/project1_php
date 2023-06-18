
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../inc/css/style1.css">
</head>
<body>
    <h1> MS Institute</h1>

        <main>
                
            <table id='tbl'>
                <tr><h2>Studenten Information</h2></tr>
                <tr>
                    <th>Vor_Name</th>
                    <th>Nach_Name</th>
                    <th>Adresse</th>
                    <th>E_Mail</th>
                </tr>
                <?php
                while($info = mysqli_fetch_array($res) ){
                ?>
                <tr>
                    <td><?php echo $info['vorname'] ?></td>
                    <td><?php echo $info['nachname'] ?></td>
                    <td><?php echo $info['adresse'] ?></td>
                    <td><?php echo $info['email'] ?></td>
                </tr>
                <?php } ?>
            </table>
        </main>
       
    
</body>
</html>