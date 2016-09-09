<?
$num1 = rand(0, 9);
$num2 = rand(0, 9);
?>
<!doctype html>
<html>
<head>
    <title>Worst PHP Code - Register</title>
    <meta charset="utf-8">
</head>
<body>
<form action="./register.php" method="post">
<h3>Required informations</h3>
<input type="email" name="email" placeholder="E-mail" required><br>
<input type="email" name="email_confirm" placeholder="Confirm E-mail" required><br>
<input type="password" name="passphrase" placeholder="Passphrase" required><br>
<input type="password" name="passphrase_confirm" placeholder="Confirm Passphrase" required><br>
<input type="text" name="name" placeholder="Full name" required><br>
<h3>Captcha</h3>
<?=$num1?>+<?=$num2?> = <input type="text" name="answer" placeholder="<?=$num1?>+<?=$num2?>의 값을 적으세요" required>
<input type="hidden" name="question" value="<?=$num1?>+<?=$num2?>">
<button>Register</button>
</form>
</body>
</html>
