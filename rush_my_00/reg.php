<?php
$link = mysqli_connect('localhost', 'root', '123456');
$sql = 'CREATE DATABASE my_db';
mysqli_query($link, $sql);
$link = mysqli_connect('localhost', 'root', '123456', 'my_db');
$sql = 'CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
passwd VARCHAR(30) NOT NULL,
passwd_again VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)';
$login = mysqli_query($link, "SELECT login FROM MyGuests");
while($row = mysqli_fetch_assoc($login))
{
	if (trim($row['login']) == trim($_POST['login'])) 
	{
		echo "Логин существует";
		exit;
    }
}
$email = mysqli_query($link, "SELECT email FROM MyGuests");
while($row = mysqli_fetch_assoc($email))
{
	if (trim($row['email']) == trim($_POST['email'])) 
	{
		echo "email существует";
		exit;
    }
}
if(trim($_POST['passwd']) != trim($_POST['passwd_again'])) 
	{
		echo "пароли разные";
		exit;
    }
$query = "INSERT INTO MyGuests VALUES(NULL, '".$_POST['login']."', '".$_POST['passwd']."', '".$_POST['passwd_again']."', '".$_POST['email']."', now())";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
mysqli_close($link);
header('Location: reg.html');
?>