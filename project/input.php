<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'project2');

mysqli_query($connect, 'INSERT INTO bd (Login, Password) VALUES ("'.$_POST['nickname'].'", "'.$_POST['password'].'")');

header('Location: index.php');
 ?>