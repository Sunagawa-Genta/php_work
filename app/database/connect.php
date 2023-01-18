<?php
$user ="uy01";
$pass ="genta0810";
//DBと接続
try{
    $pdo = new PDO('mysql:host=mysql57.uy01.sakura.ne.jp;dbname=uy01_gs_work;charset=utf8', $user, $pass);
    //echo "DBとの接続に成功しました";
}
catch(PDOException $error){
    echo$error->getMessage();
}

