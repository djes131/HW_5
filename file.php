<?php
if(isset($_POST['login'])) $name = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];
if (isset($_POST['city'])) $city = $_POST['city'];
if (isset($_POST['answer'])) $answer=$_POST['answer'];

echo "Ваше имя: $name  <br> Ваш пароль: $password <br> Ваш город: $city<br/>Ваше согласие: $answer<br/>";


//var_dump($_FILES);
//print_r($_FILES);
$_FILES['avatar'];
//загрузить картинку отправленную пользователем к себе в папку
move_uploaded_file($_FILES['avatar']['tmp_name'], 'img/'.$_FILES['avatar']['name']);

$path = "users/";
$fh = fopen($path."user.txt", "a");
fwrite($fh, "\tЛогин:");
fwrite($fh, $name);
fwrite($fh, "\tПароль:");
fwrite($fh, $password);
fwrite($fh, "\tГород:");
fwrite($fh, $city);
fwrite($fh, "\tRadio:");
fwrite($fh, $answer);
fwrite($fh, "\r\n");
fclose($fh);

