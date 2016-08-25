<?php
include 'common.php';
?>
<!doctype html>
<html>
<head>
    <title>Worst PHP Code</title>
    <meta charset="utf-8">
</head>
<body>
<?php
if ($user) {
?>
Hello <?=$user[name]?>!<br>
<a href="logout.php">Logout</a>
<?php
} else {
?>
<a href="./register_form.php">Register</a>
<a href="./login_form.php">Login</a>
<?php
}
?>
<hr>
<ul>
<?php
$query = mysql_query("select * from users order by id", $c);
while($row = mysql_fetch_array($query))
?>
    <li><a href="./?owner=<?=$row[id]?>"><?=$row[name]?>&apos;s file list</a></li>
<?php
}
?>
</ul>
</body>
</html>
