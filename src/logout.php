<?php
include "common.php";

if ($user) {
    setcookie("logged_id", "");
}

header("location: ./");
mysql_close($c);
