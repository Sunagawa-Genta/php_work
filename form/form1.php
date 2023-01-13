<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
</head>
<body>
<form method="post" action="form2.php">
  <div>氏名(ペンネーム)</div>
  <input type="text" name="name">
  <div>メールアドレス</div>
  <input type="email" name="mail">
  <div>問い合わせ内容</div>
  <textarea name="message"></textarea>
  <div>
  <input type="submit" value="送信">
  </div>
</form>
</body>
</html>