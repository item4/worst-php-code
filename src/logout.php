<?php
include "common.php";

if ($user) {
    session_unregister("logged_id");
}

header("location: ./");
mysql_close($c);
