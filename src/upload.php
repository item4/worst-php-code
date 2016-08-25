<?php
include "common.php";

if (!$user) {
    die();
}

copy($upload[tmp_name], "./" . $user[id] . "/" . $upload[name]);
header("location: ./");

mysql_close($c);
