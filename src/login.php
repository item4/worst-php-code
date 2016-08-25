<?
include "common.php";

$user = mysql_fetch_array(
    mysql_query(
        "select * from users where email = '$email' " .
        "and passphrase = '$passphrase'",
        $c
    )
);

if ($user) {
    $logged_id = $user[id];
    setcookie("logged_id", $logged_id);
    header("location: ./");
} else {
    die("그런 사용자 없다");
}

mysql_close($c);
?>
