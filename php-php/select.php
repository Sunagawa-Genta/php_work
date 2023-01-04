<?php

// DB接続
$dbn ='mysql:dbname=gs_work;charset=utf8mb4;port=3306;host=localhost';
$user = 'genta';
$pwd = 'root';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
$sql = 'SELECT * FROM form_table';
$stmt = $pdo->prepare($sql);



// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["name"]}</td>
      <td>{$record["hospital"]}</td>
      <td>{$record["money"]}</td>
      <td>{$record["enjoy"]}</td>
      <td>{$record["enjoy2"]}</td>
      <td>{$record["enjoy3"]}</td>
      <td>{$record["enjoy4"]}</td>
      <td>{$record["enjoy5"]}</td>
      <td>{$record["enjoy6"]}</td>
      <td>{$record["enjoy7"]}</td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>リスト（一覧画面）</title>
  
</head>

<body>
    <fieldset>
      <legend>リスト（一覧画面）</legend>
      <a href="input.php">入力画面</a>
      <table>
        <thead>
          <tr>
            <th>➀名前</th>
            <th>➁病院</th>
            <th>➂年収</th>
            <th>➃待遇面の満足度</th>
            <th>➄社内の士気</th>
            <th>➅風通しの良さ</th>
            <th>➆社員の相互尊重</th>
            <th>➇20代成長環境</th>
            <th>➈人材の長期育成</th>
            <th>➉人事評価の適正感</th>
          </tr>
        </thead>
        <tbody>
          <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
            <?= $output ?>
        </tbody>
      </table>
    </fieldset>
</body>
</html>