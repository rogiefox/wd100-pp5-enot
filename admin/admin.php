<?php
    if(!isset($_SESSION['level'])){
        header("Location: ../user_login.php");
    }elseif(($_SESSION['level']) != 1){
        header("Location: ../user_login.php");
    }
?>