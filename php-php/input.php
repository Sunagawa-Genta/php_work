<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録フォーム（入力画面）</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>登録リスト（入力画面）</legend>
      <a href="select.php">一覧画面</a>
      <div>
        ➀名前: <input type="text" name="name">
      </div>
      <div>
        ➁病院: <input type="text" name="hospital">
      </div>
      <div>
        ➂年収: <input type="text" name="money">
      </div>
      <div>
        ➃待遇面の満足度(1~5): <input type="number" name="enjoy">
      </div>
      <div>
        ➄社内の士気(1~5): <input type="number" name="enjoy2">
      </div>
      <div>
        ➅風通しの良さ(1~5): <input type="number" name="enjoy3">
      </div>
      <div>
        ➆社員の相互尊重(1~5): <input type="number" name="enjoy4">
      </div>
      <div>
        ➇20代成長環境(1~5): <input type="number" name="enjoy5">
      </div>
      <div>
        ➈人材の長期育成(1~5): <input type="number" name="enjoy6">
      </div>
      <div>
        ➉人事評価の適正感(1~5): <input type="number" name="enjoy7">
      </div>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>