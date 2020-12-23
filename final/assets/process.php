<?php session_start();

$_SESSION['n'] = $n = $_POST['name'];
$g = $_POST['genre'];
$i = 'img/'.$_FILES['pic']['name'];

move_uploaded_file( $_FILES['pic']['tmp_name'], $i );

$cnt = mysqli_connect('localhost', 'root', 'root', 'phpsql20');
$qry = "insert into sqltable(name, genre, pic) values ('$n', '$g', '$i');";

mysqli_query($cnt, $qry);
mysqli_close($cnt);

header('location:../admin.php');

?>