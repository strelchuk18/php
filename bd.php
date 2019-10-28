
<?php
$connection = mysqli_connect('localhost', 'root', 'rootroot');

if($connection == false)
{
    exit();
}

$db=mysqli_select_db($connection, "resouce");
mysqli_set_charset("utf8_general_ci");
if (!$connection || !$db)
{
exit(mysqli_error());
}


$id = $_POST['id'];
$fn = $_POST['first_name']; 
$ln = $_POST['last_name'];
$email = $_POST['email'];

 echo ($id);
 echo ($fn);
 echo ($ln);
echo ($email);

$result = mysqli_query("INSERT INTO `users`(`id`, `first_name`, `last_name`, `email` ) VALUES ('$id','$fn','$ln', '$email')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
} 

?> 
