<?php
session_start();
session_destroy();
header("Location: http://localhost/inventory/Inventory/index.php");
