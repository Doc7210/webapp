<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root');
if (!$link) {
    die('Ошибка: ' . mysqli_error());
}
echo 'Успешно';
mysqli_close($link);
