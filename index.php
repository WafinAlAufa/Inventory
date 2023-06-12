<?php 


session_start();

$cek_login = !empty($_SESSION["sess_login"]) ? 1 : 0;

// echo $_SESSION["sess_login"];

if($cek_login == 0){
    include "pages/login.php";
}else{
    include "pages/main.php";
}

//include "pages/main.php";
