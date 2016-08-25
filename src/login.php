<?php
include "common.php";

$passphrase = md5($passphrase);

$user = mysql_fetch_array(
    mysql_query(
        "select * from users where email = '$email' " .
        "and passphrase = '$passphrase'",
        $c
    )
);

if ($user) {
    $logged_id = $user[id];
    session_register("logged_id");
    header("location: ./");
} else {
    die("그런 사용자 없다");
}

mysql_close($c);
