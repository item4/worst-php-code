<?php
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

$passphrase = md5($passphrase);

mysql_query(
    "insert into users (email, passphrase, name) " .
    "values ('$email', '$passphrase', '$name');",
    $c
);

echo "가입완료. <a href=\"./login_form.php\">로그인 페이지</a>에서 로그인 하세요.";

mysql_close($c);
