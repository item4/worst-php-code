<?
include "common.php";

if (!$user) {
    die();
}

header("Content-Disposition: attachment; filename=" . $filename);

$f = fopen("./$owner/$filename", "r");
while (!feof($f)) {
    echo fread($f, 1024);
    sleep(0.1);
}

mysql_close($c);
?>
