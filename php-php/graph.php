<?php
// DB接続
$dbn ='mysql:host=mysql57.uy01.sakura.ne.jp;dbname=uy01_gs_work;charset=utf8';
$user = 'uy01';
$pwd = 'genta0810';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

//待遇面の満足度の平均
$con ='SELECT AVG(enjoy) FROM form_table';
$stmt = $pdo->prepare($con);

//社内の士気
$con2 ='SELECT AVG(enjoy2) FROM form_table';
$stmt2 = $pdo->prepare($con2);

//風通しの良さ
$con3 ='SELECT AVG(enjoy3) FROM form_table';
$stmt3 = $pdo->prepare($con3);

//社員の相互尊重
$con4 ='SELECT AVG(enjoy4) FROM form_table';
$stmt4 = $pdo->prepare($con4);

//20代成長環境
$con5 ='SELECT AVG(enjoy5) FROM form_table';
$stmt5 = $pdo->prepare($con5);

//人材の長期育成
$con6 ='SELECT AVG(enjoy6) FROM form_table';
$stmt6 = $pdo->prepare($con6);

//人事評価の適正感
$con7 ='SELECT AVG(enjoy7) FROM form_table';
$stmt7 = $pdo->prepare($con7);

//平均年収
$con8 ='SELECT AVG(money) FROM form_table';
$stmt8 = $pdo->prepare($con8);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
  $status2 = $stmt2->execute();
  $status3 = $stmt3->execute();
  $status4 = $stmt4->execute();
  $status5 = $stmt5->execute();
  $status6 = $stmt6->execute();
  $status7 = $stmt7->execute();
  $status8 = $stmt8->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
$result4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
$result5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
$result6 = $stmt6->fetchAll(PDO::FETCH_ASSOC);
$result7 = $stmt7->fetchAll(PDO::FETCH_ASSOC);
$result8 = $stmt8->fetchAll(PDO::FETCH_ASSOC);

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Chart Sample</title>
</head>
<body>
    <h1>山口大学医学部附属病院</h1>
    <div style="width: 500px; margin:auto">
        <canvas id="chart"></canvas>
    </div>
    <div>
    <h1>平均年収</h1>
    </div>
    <div style="width: 500px; margin:auto">
    <canvas id="chart2"></canvas>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/Chart.min.js"></script>
    <script>
        //待遇面の満足度
        const output = <?= json_encode($result)?>;
        let enjoy = Object.values(output[0]);
        //社内の士気
        const output2 = <?= json_encode($result2)?>;
        let enjoy2 = Object.values(output2[0]);
        //風通しの良さ
        const output3 = <?= json_encode($result3)?>;
        let enjoy3 = Object.values(output3[0]);
        //社員の相互尊重
        const output4 = <?= json_encode($result4)?>;
        let enjoy4 = Object.values(output4[0]);
        //20代の成長環境
        const output5 = <?= json_encode($result5)?>;
        let enjoy5 = Object.values(output5[0]);
        //人材の長期成長
        const output6 = <?= json_encode($result6)?>;
        let enjoy6 = Object.values(output6[0]);
        //人事評価の適正感
        const output7 = <?= json_encode($result7)?>;
        let enjoy7 = Object.values(output7[0]);
        //平均年収
        const output8 = <?= json_encode($result8)?>;
        var enjoy8 = Object.values(output8[0]);
        console.log(enjoy8);

        var ctx = $('#chart');
        var mychart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [
                    '待遇面の満足度','社内の士気','風通しの良さ','社員の相互尊重','20代成長環境','人材の長期育成','人事評価の適正感'],
                datasets: [{
                 label: '山口大学医学部附属病院',
                 data: [enjoy[0], enjoy2[0], enjoy3[0], enjoy4[0], enjoy5[0], enjoy6[0], enjoy7[0]],
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
<script>
var ctx = document.getElementById('chart2');

var data = {
    labels: ["看護師平均", "山口大学平均"],
    datasets: [{
        label: '年収',
        data: [400, enjoy8[0]],
        backgroundColor: 'rgba(255, 100, 100, 1)'
    }]
};

var options = {
    indexAxis: 'y',
    scales: {
        x:{
            min: 0
            //beginAtZero: true
        }
    }
};

var chart2 = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
</script>

</body>
</html>