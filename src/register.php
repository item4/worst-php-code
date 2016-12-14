<?
include "common.php";

if ($email != $email_confirm) {
    die("E-mail 주소 확인칸이 일치하지 않음");
}

if ($passphrase != $passphrase_confirm) {
    die("비밀번호 확인칸이 일치하지 않음");
}

$check = mysql_fetch_row(
    mysql_query("select count(*) from users where email = " . $email, $c);
);

if ($check[0] > 0) {
    die("이미 가입된 E-mail 주소");
}

eval("\$correct_answer = $question");

if ($correct_answer != $answer) {
    die("올바르지 않은 Captcha");
}

mysql_query(
    "insert into users (email, passphrase, name, bio) " .
    "values ('$email', '$passphrase', '$name', '$bio');",
    $c
);

$user_id = mysql_insert_id($c);
mkdir("./" . $user_id);
$fp = fopen("color_setting/$user_id.inc", "w");
fwrite($fp, "<?\n\$background='$backround';\n\$color='$color';\n?>");
fclose($fp);

echo "가입완료. <a href=\"./login_form.php\">로그인 페이지</a>에서 로그인 하세요.";

mysql_close($c);
?>
