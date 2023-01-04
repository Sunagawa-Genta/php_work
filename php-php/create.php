<?php
// var_dump($_POST);
// exit();
//POSTデータ確認
if(!isset($_POST['name']) || $_POST['name'] === '' ||
!isset($_POST['hospital']) || $_POST['hospital'] === '' ||
!isset($_POST['money']) || $_POST['money'] === '' ||
!isset($_POST['enjoy']) || $_POST['enjoy'] === '' ||
!isset($_POST['enjoy2']) || $_POST['enjoy2'] === '' ||
!isset($_POST['enjoy3']) || $_POST['enjoy3'] === '' ||
!isset($_POST['enjoy4']) || $_POST['enjoy4'] === '' ||
!isset($_POST['enjoy5']) || $_POST['enjoy5'] === '' ||
!isset($_POST['enjoy6']) || $_POST['enjoy6'] === '' ||
!isset($_POST['enjoy7']) || $_POST['enjoy7'] === '' ){
    exit('paramError');
}

$name =$_POST['name'];
$hospital =$_POST['hospital'];
$money =$_POST['money'];
$enjoy =$_POST['enjoy'];
$enjoy2 =$_POST['enjoy2'];
$enjoy3 =$_POST['enjoy3'];
$enjoy4 =$_POST['enjoy4'];
$enjoy5 =$_POST['enjoy5'];
$enjoy6 =$_POST['enjoy6'];
$enjoy7 =$_POST['enjoy7'];


//DB接続
$dbn ='mysql:dbname=gs_work;charset=utf8mb4;port=3306;host=localhost';
$user = 'genta';
$pwd = 'root';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

//SQL作成＆実行
$sql = 'INSERT INTO form_table (id, name, hospital, money, enjoy, enjoy2, enjoy3, enjoy4, enjoy5, enjoy6, enjoy7) VALUES (NULL, :name, :hospital, :money, :enjoy, :enjoy2, :enjoy3, :enjoy4, :enjoy5, :enjoy6, :enjoy7)';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':hospital', $hospital, PDO::PARAM_STR);
$stmt->bindValue(':money', $money, PDO::PARAM_STR);
$stmt->bindValue(':enjoy', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy2', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy3', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy4', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy5', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy6', $enjoy, PDO::PARAM_STR);
$stmt->bindValue(':enjoy7', $enjoy, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header('Location:input.php');
exit();