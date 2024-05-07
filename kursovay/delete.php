<?php
require_once "helpers/function.php";
if(isset($_POST["id"]))
{
    $userid = $db->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM posts WHERE id = '$userid'";
    if($db->query($sql)){
         
        header("Location: prof.php");
    }
    else{
        echo "Ошибка: " . $db->error;
    }
    $db->close();  
}
?>