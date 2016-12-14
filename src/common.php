<?
include 'common.php';

$c = mysql_connect($host, $user, $password);
mysql_select_db("dbname", $c);

if ($logged_id) {
    $user = mysql_fetch_array(
        mysql_query("select * from users where id = $logged_id", $c);
    );
}
?>
