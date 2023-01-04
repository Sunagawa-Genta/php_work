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
//待遇面の満足度の平均
$con ='SELECT AVG(enjoy) FROM form_table';
$stmt = $pdo->prepare($con);
// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Chart Sample</title>
</head>
<body>
    <h1>病院評価</h1>
    <div style="width: 500px;">
        <canvas id="chart"></canvas>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        //待遇面の満足度
        const output = <?= json_encode($result)?>;
        //const enjoy = [Number(output[0])];
        //console.log(data);
        //for (let i = 0; i < 1; i++) {
        //const output = Object.values(data[i]);
        //console.log(Object.values(output[0]));
        let enjoy = Object.values(output[0]);
        //社内の士気
        const output = <?= json_encode($result)?>;
        let enjoy2 = Object.values(output[0]);

        var ctx = $('#chart');
        var mychart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [
                    '待遇面の満足度','社内の士気','風通しの良さ','社員の相互尊重','20代成長環境','人材の長期育成','人事評価の適正感'],
                datasets: [{
                 label: 'yamaguchi',
                 data: [enjoy[0], 4, 3, 4, 5, 5, 5],
                // データライン
                 borderColor: 'blue',
                 borderWidth: 2,
                }]
            },
    options: {
    scales: {
      r:{
        // 最小値・最大値
        min: 0,
        max: 5,
        // 背景色
        backgroundColor: 'lightyellow',
        // グリッドライン
        grid: {
          color: 'lightseagreen',
        },
        // アングルライン
        angleLines: {
          color: 'brown',
        },
        // ポイントラベル
        pointLabels: {
          color: 'blue',
          backdropColor: '#ddf',
          backdropPadding: 5,
          padding: 20,
         },
        },
        },
    },
    });
</script>

</body>
</html>