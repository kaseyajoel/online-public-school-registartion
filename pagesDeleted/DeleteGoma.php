<?php

$conn=mysqli_connect("localhost", "root", "", "rdc"); 
$id = $_GET['id'];

$q = " DELETE FROM `goma` WHERE id = $id ";
/*----ici ce le code ki permet de supprimer--------*/
mysqli_query($conn, $q);

header('location:goma.php');

?>