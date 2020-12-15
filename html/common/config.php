<?php

//MAMP
//$db = new mysqli ('localhost', 'root', 'root', 'greatappdb');
//docker
$db = new mysqli('mysql', 'root', 'pass', 'greatappdb');
//$mysqli = new mysqli('Host or IP', 'User', 'Password', 'DBName');
session_start();
?>