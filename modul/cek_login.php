<?php

session_start();


$name = !empty($_GET["name"]) ? $_GET["name"] : "";
$password = !empty($_GET["password"]) ? $_GET["password"] : "";

if($name == 'diar' && $password == 'diar123'){
    $_SESSION["sess_login"] = 1;
    echo ' login berhasil';
    header("Location: http://[::1]/wafin/Inventory/index.php?nav=dashboard");
}else{
    echo 'login gagal bos <a href="http://[::1]/wafin/Inventory/">Kembali</a>';
}


?>