


<?php
include "./../inc/function/conn.php";


$sql = "SELECT * FROM studenten";
$res = mysqli_query($con,$sql);

include "./../view/studenten_view.php";

?>




   