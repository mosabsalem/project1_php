<?php
include "./../inc/function/conn.php";

if(isset($_POST['vorName'])){
    $vorName = $_POST['vorName'];
}
if(isset($_POST['nachName'])){
    $nachName = $_POST['nachName'];
}
if(isset($_POST['adresse'])){
    $adresse = $_POST['adresse'];
}
if(isset($_POST['eMail'])){
    $eMail = $_POST['eMail'];
}


if(isset($_POST['add'])){
    $sqls = "INSERT INTO studenten (vorname, nachname, adresse, email)
            VALUE('$vorName', '$nachName',  '$adresse', '$eMail')";
    mysqli_query($con,$sqls);
    header("location: ./../view/data_verwaltung_view.php");
}

if(isset($_POST['losch'])){
    $sqls = "DELETE FROM studenten 
            WHERE vorname = '$vorName' && nachname = '$nachName'";
    mysqli_query($con,$sqls);
    header("location: ./../view/data_verwaltung_view.php");
}

include "./../view/data_verwaltung_view.php";

?>