<?php

session_start();
session_destroy();
header("Location: http://[::1]/wafin/Inventory/index.php");

?>