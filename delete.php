<?php

$conn=mysqli_connect("localhost", "root", "", "rdc"); 
$stdid = $_GET['stdid'];

$q = " DELETE FROM `studenttable` WHERE stdid = $stdid ";
/*----ici ce le code ki permet de supprimer--------*/
mysqli_query($conn, $q);

header('location:displayreg.php');

?>