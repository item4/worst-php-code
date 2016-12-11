<?
include "common.php";
?>
<!doctype html>
<html>
<head>
    <title>Worst PHP Code</title>
    <meta charset="utf-8">
</head>
<body>
<?
if ($user) {
?>
Hello <?=$user[name]?>!<br>
<a href="logout.php">Logout</a>
<?
} else {
?>
<a href="./register_form.php">Register</a>
<a href="./login_form.php">Login</a>
<?
}

if ($user) {
?>
<hr>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="upload"><br>
<button>Upload</button>
</form>
<ul>
<?
$query = mysql_query("select * from users order by id", $c);
while($row = mysql_fetch_array($query))
?>
    <li><a href="./?owner=<?=$row[id]?>"><?=$row[name]?>&apos;s file list</a></li>
<?
}
?>
</ul>
<ul>
<?
if (!$owner) {
    $owner = $user[id];
}
$file_list = `ls $owner`;
$files = explode("\n", $file_list);
for ($i = 0; $i < count($files); $i++) {
?>
    <li><a href="./download.php?owner=<?=$owner?>&amp;filename=<?=rawurlencode($files[$i])?>"><?=files[$i]?></a></li>
<?
}
?>
</ul>
<?
}
?>
</body>
</html>
