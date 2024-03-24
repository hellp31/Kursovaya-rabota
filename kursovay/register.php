<?php
require_once('helpers/function.php');
$name=filter_var(trim($_POST['name']));
$family=filter_var(trim($_POST['family']));
$psw=filter_var(trim($_POST['psw']));
$psw_repeat=filter_var(trim($_POST['psw_repeat']));



if ($psw != $psw_repeat ){
        echo"<script language='javascript'> 
            alert('Пароли не совпадают')
        </script> 
            "; 
        exit();
}


$sql ="SELECT * FROM `users` WHERE name = '$name' AND  family='$family'";
$result = $db->query($sql);
if ($result->num_rows > 0){
    echo"<script language='javascript'> 
        alert('Такой пользователь уже есть')
    </script> 
    "; 
exit();
}else{ 
    $psw=md5($psw);
    $sql = "INSERT INTO `users` (name,family,psw) VALUES('$name', '$family', '$psw')";
    if ($db -> query($sql) === TRUE){
        header('Location: /');
        $db ->close();
        
    }
    else{
        echo "Ошибка:", $db->error;
    }   
}
echo"<script language='javascript'>
setTimeout(function(){
    window.location.href = 'regwind.php';
  },0 );
</script>";


