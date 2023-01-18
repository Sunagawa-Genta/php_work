<?php
try {
  //DB名、ユーザー名、パスワードを変数に格納
  $dsn ='mysql:host=mysql57.uy01.sakura.ne.jp;dbname=uy01_gs_work;charset=utf8';
  $user ='uy01';
  $password ='genta0810';
 
  $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示
 
  //input.phpの値を取得
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
 
  $sql = "INSERT INTO form_db (氏名, email, 内容) VALUES (:name, :mail, :message)"; // テーブルに登録するINSERT INTO文を変数に格納 VALUESはプレースフォルダーで空の値を入れとく
  $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
  $params = array(':name' => $name, ':mail' => $mail, ':message' => $message); // 挿入する値を配列に格納
  $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
 
  // 登録内容確認・メッセージ
  echo "<p>名前: " . $name . "</p>";
  echo "<p>メールアドレス: " . $mail . "</p>";
  echo "<p>メッセージ: " . $message . "</p>";
  echo '<p>上記の内容をデータベースへ登録しました。</p>';
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="form1.php">戻る</a>
</body>
</html>