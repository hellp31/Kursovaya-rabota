<?php

require_once('db.php');
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$psw =  filter_var(trim($_POST['psw']),FILTER_SANITIZE_STRING);
$family =  filter_var(trim($_POST['family']),FILTER_SANITIZE_STRING);


echo"<script language='javascript'>
setTimeout(function(){
    window.location.href = 'singin.php';
  },0 );
</script>";



$result = $conn->query("SELECT * FROM `users` WHERE `name` = '$name' AND `psw` = '$psw' AND `family`='$family'");
$user = $result->fetch_assoc();

if ($result->num_rows ==0){    
    echo"<script language='javascript'> 
            alert('Нет такого пользователя')
        </script> 
            "; 
    exit();
} 




$conn ->close();
header('Location: /');

