<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div>
  <h1 class="col-lg-10 mx-auto text-center mt-5">問い合わせフォーム</h1>
</div>
<div class="container my-5">
 <form method="post" action="form2.php">
  <div class="form-group">
   <div>氏名(ペンネーム)</div>
   <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <div>メールアドレス</div>
    <input type="email" class="form-control" name="mail">
    <div>問い合わせ内容</div>
    <textarea name="message" class="form-control"></textarea>
  </div>
  <div>
  <input type="submit" class="btn btn-outline-primary" value="送信">
  </div>
  <a href="home.php">ホームへ</a>
</form>
</body>
</html>