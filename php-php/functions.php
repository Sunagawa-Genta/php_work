<?php

function connect_to_db()
{
  $dsn = 'mysql:dbname=gs_work;charset=utf8mb4;host=localhost';
  $user = 'root';
  $pwd = '';

  try {
    return new PDO($dsn, $user, $pwd);
  } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
  }
}

// ログイン状態のチェック関数
function check_session_id()
{
  if (!isset($_SESSION["session_id"]) ||$_SESSION["session_id"] !== session_id()) {
    header('Location:login.php');
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION["session_id"] = session_id();
  }
}