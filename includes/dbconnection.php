<?php
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'uverenie';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
    $mysqli -> set_charset("utf8");
    
?>