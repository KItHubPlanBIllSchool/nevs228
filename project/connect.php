<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'Uvarovka 15');

mysqli_query($connect, "INSERT INTO instagram (mail,name,nickname,password) VALUES ( '{$_POST['mail']}', '{$_POST['name']}', '{$_POST['nickname']}', '{$_POST['password']}' )	"	);

header('Location: index.php ');
 ?>