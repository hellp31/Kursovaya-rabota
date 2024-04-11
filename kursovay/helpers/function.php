<?php
/* сервер идентифицирует браузер */
session_start();
//echo phpinfo();

$db = mysqli_connect("localhost", "root", "", "test2");
if (!$db) {
    die('Ошибка подключения');
}

function login($name, $psw, $family)
{
    global $db;
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE name='$name' AND psw=md5('$psw') AND family='$family';");
    return mysqli_num_rows($result);
}
function student()
{
    global $db;
    $result = mysqli_query($db, "SELECT  *  FROM `student` ;" );
    return mysqli_fetch_all($result, MYSQLI_ASSOC );

}